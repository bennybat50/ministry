<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkWithPage;
use App\Models\Pages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    protected $pages;

    public function __construct(Pages $pages)
    {
        $this->pages = $pages;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //
        $pages=null;

        if ($request->search) {
            $pages = Pages::defaultOrder()->where("created_at", "<", Carbon::now())->where('title', 'LIKE', "%{$request->search}%")->where('url', 'LIKE', "%{$request->search}%")->orderBy("created_at", 'desc')->paginate(20);
        }else{
            $pages = Pages::defaultOrder()->where("created_at", "<", Carbon::now())->orderBy("created_at", 'desc')->paginate(20);
        }


        return view('admin.pages.index', ["pages" => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.create')->with(["model" => new Pages(), 'orderPages' => Pages::defaultOrder()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkWithPage $request)
    {
        //
        if ($request->file('page_img') != null) {

            $imageName = time() . '.' . $request->page_img->extension();
            $path = $request->page_img->move(public_path('uploads'), $imageName);
            $request->page_img = $imageName;
        }

        if ($request->file('row_1_img') != null) {
            $imageName = time() . '.' . $request->row_1_img->extension();
            $path = $request->row_1_img->move(public_path('uploads'), $imageName);
            $request->row_1_img = $imageName;
        }

        if ($request->file('row_2_img') != null) {
            $imageName = time() . '.' . $request->row_2_img->extension();
            $path = $request->row_2_img->move(public_path('uploads'), $imageName);
            $request->row_2_img = $imageName;
        }

        if ($request->file('side_img') != null) {
            $imageName = time() . '.' . $request->side_img->extension();
            $path = $request->side_img->move(public_path('uploads'), $imageName);
            $request->side_img = $imageName;
        }



        $page = Auth::user()->pages()->save(new Pages([
            'title' => $request->title,
            'url' => $request->url,
            'main_content' => $request->main_content,
            "page_img" => $request->page_img,
            'row_1_title' => $request->row_1_title,
            'row_1_img' => $request->row_1_img,
            'row_1_content' => $request->row_1_content,
            'row_1_url' => $request->row_1_url,
            'row_2_title' => $request->row_2_title,
            'row_2_img' => $request->row_2_img,
            'row_2_content' => $request->row_2_content,
            'row_2_url' => $request->row_2_url,
            'side_title' => $request->side_title,
            'side_img' => $request->side_img,
            'side_content' => $request->side_content,
            'side_url' => $request->side_url,
            'side_sub' => "slider",
        ]
        ));

        $this->updatePageOrder($page, $request);

        return redirect('admin/pages')->with('success', "{$request->title} Created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $page)
    {
        //

        $model = Pages::findOrFail($page->id);

        return view('admin.pages.edit', ["model" => $model, 'orderPages' => Pages::defaultOrder()->get()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(WorkWithPage $request, Pages $page)
    {
        //
        if ($response = $this->updatePageOrder($page, $request)) {
            return $response;
        }

        if ($request->file('page_img') != null) {

            $imageName = time() . '.' . $request->page_img->extension();
            $path = $request->page_img->move(public_path('uploads'), $imageName);
            $page->page_img  = $imageName;
        }
        if ($request->file('row_1_img') != null) {
            $imageName = time() . '.' . $request->row_1_img->extension();
            $path = $request->row_1_img->move(public_path('uploads'), $imageName);
            $page->row_1_img = $imageName;
        }

        if ($request->file('row_2_img') != null) {
            $imageName = time() . '.' . $request->row_2_img->extension();
            $path = $request->row_2_img->move(public_path('uploads'), $imageName);
            $page->row_2_img  = $imageName;
        }

        if ($request->file('side_img') != null) {
            $imageName = time() . '.' . $request->side_img->extension();
            $path = $request->side_img->move(public_path('uploads'), $imageName);
            $page->side_img = $imageName;
        }


        $page->fill($request->only([
            'title',
            'url',
            'main_content',
            'row_1_title',
            'row_1_content',
            'row_1_url',
            'row_2_title',
            'row_2_content',
            'row_2_url',
            'side_title',
            'side_content',
            'side_url',
            'side_sub']));


        $page->save();
        return redirect('admin/pages')->with('success', "{$page->title} Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Pages::destroy($id);
        $request->session()->flash('success','Page  deleted!');

        return  redirect("admin/pages");
    }
    protected function updatePageOrder($page, $request)
    {
        if ($request->has('order', 'orderPage')) {
            if ($page->id == $request->orderPage) {
                return redirect()->route('pages.edit', ['page', $page->id])->withInput()->withErrors(['error' => "You cannot order a page against itself"]);
            }
            $page->updateOrder($request->order, $request->orderPage);
        }
    }
}
