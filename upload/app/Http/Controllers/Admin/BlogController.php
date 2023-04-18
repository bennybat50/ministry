<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::where("created_at", "<", Carbon::now())->orderBy("created_at", 'desc')->paginate(15);
        return view('admin.posts.index', ['posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create')->with(["post" => new Post()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $post=new Post;
        if( $req->file('banner')!=null){
          $imageName=time().'.'.$req->banner->extension();
          $path= $req->banner->move(public_path('uploads'), $imageName);
          $post->banner=$imageName;
        }
        if( $req->file('thumbnail')!=null){
            $imageName=time().'.'.$req->thumbnail->extension();
            $path= $req->thumbnail->move(public_path('uploads'), $imageName);
            $post->thumbnail=$imageName;
          }

        $post->title=$req['title'];
        $post->slug=$req['slug'];
        $post->body=$req['body'];
        $post->published_at= date('Y-m-d',  strtotime(Carbon::parse($req['published_at'])->toDayDateTimeString()));
        $post->excerpt=$req['excerpt'];
        $post->user_id=auth()->id();

        $post->save();
        $req->session()->flash('success','Post added successfully');

         return  redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $model = Post::findOrFail($post->id);

        return view('admin.posts.edit', ["post" => $model,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Post $post)
    {

        $post=Post::findOrFail($post->id);
        if( $req->file('banner')!=null){
            $imageName=time().'.'.$req->banner->extension();
            $path= $req->banner->move(public_path('uploads'), $imageName);
            $post->banner=$imageName;
          }
          if( $req->file('thumbnail')!=null){
              $imageName=time().'.'.$req->thumbnail->extension();
              $path= $req->thumbnail->move(public_path('uploads'), $imageName);
              $post->thumbnail=$imageName;
            }

          $post->title=$req['title'];
          if($req['slug']){
            $post->slug=$req['slug'];
          }

          $post->body=$req['body'];
          $post->excerpt=$req['excerpt'];
          $post->user_id=auth()->id();
          $post->published_at= date('Y-m-d',  strtotime(Carbon::parse($req['published_at'])->toDayDateTimeString()));
          $post->save();
          $req->session()->flash('success','Data updated successfully');

          if($req['slug']=="permanent-secretary" || $req['slug']=="minister-of-health" || $req['slug']==null){
            return  redirect('admin/site-items');
          }else{
            return  redirect('admin/posts');
          }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Post $post)
    {

        Post::destroy($post->id);
        $request->session()->flash('success','Post  deleted!');
        return  redirect("admin/posts");
    }
}
