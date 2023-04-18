<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SiteItems;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siteItems=SiteItems::all();
        $post=Post::where("slug", "permanent-secretary")->orwhere("slug", "minister-of-health")->orderBy("created_at", 'desc')->paginate(15);
        return view('admin.site.index', ['site_items'=>$siteItems,'posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $item=new SiteItems();
        $item->text="";
        $item->url="";
       if( $req->has('carosel')){
        $item->site_area="carosel";
        $item->category="images";
       }else{
        $item->site_area="";
        $item->category="";
       }

        return view('admin.site.create')->with(["site_item" => $item]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $item=new SiteItems();

        if( $req->file('text')!=null){
            $imageName=time().'.'.$req->text->extension();
            $path= $req->text->move(public_path('uploads'), $imageName);
            $item->text=$imageName;
        }else{
            $item->text=$req['text'];
        }
        $item->url=$req['url'];
        $item->category=$req['category'];
       if($req['site_area']){
        $item->site_area=$req['site_area'];
       }else{
        $item->site_area="footer";
       }
        $item->save();
        $req->session()->flash('success',"{$item->category} added successfully");


        return  redirect('admin/site-items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteItems  $siteItems
     * @return \Illuminate\Http\Response
     */
    public function show(SiteItems $siteItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteItems  $siteItems
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteItems $site_item)
    {


        $model = SiteItems::findOrFail($site_item->id);


        return view('admin.site.edit', ["site_item" => $model,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteItems  $siteItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, SiteItems $site_item)
    {

        $item=SiteItems::findOrFail($site_item->id);

        if( $req->file('text')!=null){
            $imageName=time().'.'.$req->text->extension();
            $path= $req->text->move(public_path('uploads'), $imageName);
            $item->text=$imageName;
        }else{
            if($item->site_area!="gallery"){
                $item->text=$req['text'];
            }

        }

        $item->url=$req['url'];

        if($req['sub_text']!=null){

            $item->sub_text=$req['sub_text'];
        }


        $req->session()->flash('success','Content  Updated!');
        if($item->site_area=="gallery"){
            $item->category=$req['category'];


            $item->update();

            return  redirect('admin/gallery');
        }

        $item->update();
        return  redirect('admin/site-items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteItems  $siteItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,SiteItems $id)
    {



        SiteItems::destroy($request["item_id"]);
        $request->session()->flash('success','Content  deleted!');

        return  redirect("admin/site-items");
    }
}
