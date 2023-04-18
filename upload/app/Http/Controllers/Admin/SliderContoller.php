<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Allsliders=Slider::where("created_at", "<", Carbon::now())->orderBy("created_at", 'desc')->paginate(10);
        $statement=Slider::where("category", "statement")->get()->first();
        $placeholders=Slider::where("category", "placeholder")->get();

        return view('admin.sliders.index', ['sliders'=>$Allsliders,'statement'=>$statement,"placeholders"=>$placeholders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create')->with(["slider" => new Slider()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $slide=new Slider;
        if( $req->file('image')!=null){
          $imageName=time().'.'.$req->image->extension();
          $path= $req->image->move(public_path('uploads'), $imageName);
          $slide->image=$imageName;
        }

        $slide->title=$req['title'];
        $slide->sub_title=$req['sub_title'];
        $slide->url=$req['url'];
        $slide->category=$req['category'];

        $slide->save();
        $req->session()->flash('success','Slide added successfully');
         return  redirect('admin/sliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {

        $model = Slider::findOrFail($slider->id);

        return view('admin.sliders.edit', ["slider" => $model,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,Slider $slider)
    {

        $slide=Slider::findOrFail($slider->id);


        if( $req->file('image')!=null){

            $imageName=time().'.'.$req->image->extension();
            $path= $req->image->move(public_path('uploads'), $imageName);
            $slide->image=$imageName;
          }

          $slide->title=$req['title'];
          $slide->sub_title=$req['sub_title'];
          $slide->url=$req['url'];
          $slide->category=$req['category'];


        $slide->update();
        $req->session()->flash('success','Slide updated successfully');
         return  redirect('admin/sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Slider $slider)
    {

        Slider::destroy($slider->id);
        $request->session()->flash('success','Slider  deleted!');

        return  redirect("admin/sliders");
    }
}
