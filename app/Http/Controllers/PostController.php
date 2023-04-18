<?php

namespace App\Http\Controllers;

use App\Models\ContentLibary;
use App\Models\Pages;
use App\Models\Post;
use App\Models\SiteItems;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $post =Post::where('id',$id)->firstOrFail();

        $siteItems=SiteItems::all();

        return view('home.blog-view', ["page_title"=>"Post", "post"=>$post,"siteItems"=>$siteItems]);
    }

    public function search(Request $request)
    {


        $pages=Pages::defaultOrder()->where('title', 'LIKE', "%{$request->search}%")->orWhere('url', 'LIKE', "%{$request->search}%")->orWhere('row_1_title', 'LIKE', "%{$request->search}%")->orWhere('row_1_content', 'LIKE', "%{$request->search}%")->orWhere('row_2_title', 'LIKE', "%{$request->search}%")->orderBy("created_at", 'desc')->get();

        $allposts=Post::where('title', 'LIKE', "%{$request->search}%")->orWhere('slug', 'LIKE', "%{$request->search}%")->orWhere('body', 'LIKE', "%{$request->search}%")->orWhere('excerpt', 'LIKE', "%{$request->search}%")->orderBy("created_at", 'desc')->get();

        $contentData = ContentLibary::where('description', 'LIKE', "%{$request->search}%")->orWhere('slug', 'LIKE', "%{$request->search}%")->orWhere('category', 'LIKE', "%{$request->search}%")->orWhere('status', 'LIKE', "%{$request->search}%")->orWhere('extention', 'LIKE', "%{$request->search}%")->orderBy("created_at", 'desc')->get();



        $siteItems=SiteItems::all();

        return view('home.search-view', ["page_title"=>"Search Results", "pages_data"=>$pages,"contentData"=>$contentData, "allposts"=>$allposts,"siteItems"=>$siteItems]);
    }
}
