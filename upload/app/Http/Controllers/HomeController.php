<?php

namespace App\Http\Controllers;

use App\Models\ContentLibary;
use App\Models\Post;
use App\Models\SiteItems;
use App\Models\Slider;
use App\Models\Subscribers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $sliders =Slider::all();

        $caroselSlider=Slider::where('category', "placeholder")->get();

        $healthNews=Post::where('slug', "health-news")->orwhere('slug', "/health-news")->where("created_at", "<", Carbon::now())->orderBy("created_at", 'desc')->get();

        $ministerHealth=Post::where('slug', "minister-of-health")->get()[0];

        $permanentSecretary=Post::where('slug', "permanent-secretary")->get()[0];


        $featuredGallery=ContentLibary::where('slug', "featured-gallery")->where("created_at", "<", Carbon::now())->orderBy("created_at", 'desc')->get();

        $siteItems=SiteItems::all();

        $showCaseGallery=SiteItems::where('site_area', "gallery")->get();



        return view('home.index', ["showCaseGallery"=>$showCaseGallery,"page_title"=>"Ministry Of Health", "sliders"=>$sliders, "caroselSlider"=>$caroselSlider, "healthNews"=>$healthNews, "ministerHealth"=>$ministerHealth, "permanentSecretary"=>$permanentSecretary, "featuredGallery"=>$featuredGallery, "siteItems"=>$siteItems]);
    }

    public function subscribe(Request $req)
    {
        $sub=new Subscribers;
        $sub->email=$req['email'];
        $sub->save();

        $req->session()->flash('success','Subscribed successfully');
         return  redirect('/');
    }
}
