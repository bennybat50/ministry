<?php

namespace Database\Seeders;

use App\Models\Pages;
use App\Models\User;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::find(1);
        Pages::truncate();
        $about=new Pages([
        'title'=>"About Us",
        'url'=>'/about',
        'page_img'=>'/1640593019.jpg',
        'main_content'=>"About Us",
        'row_1_title'=>"What to know about us",
        'row_1_img'=>"1640593019.jpg",
        'row_1_content'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.
        ",
        'row_1_url'=>"/about",
        'row_2_title'=>"Second Content",
        'row_2_img'=>"1640593019.jpg",
        'row_2_content'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.",
        'row_2_url'=>"/about",
        'side_title'=>"Side Title",
        'side_img'=>"1640593019.jpg",
        'side_content'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.",
        'side_url'=>"/about",
        'side_sub'=>"samll_slider",]);

        $contact=new Pages([
            'title'=>"Contact",
            'url'=>'/contact',
            'page_img'=>'/1640593019.jpg',
            'main_content'=>"Contact us here",
            'row_1_title'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.
            ",
            'row_1_img'=>"1640593019.jpg",
            'row_1_content'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.",
            'row_1_url'=>"/about",
            'row_2_title'=>"Second Content",
            'row_2_img'=>"1640593019.jpg",
            'row_2_content'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.",
            'row_2_url'=>"/about",
            'side_title'=>"Side Title",
            'side_img'=>"1640593019.jpg",
            'side_url'=>"/about",
            'side_content'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus beatae placeat tempore optio. Ad ipsum a repellendus dolorem id facere nihil non harum temporibus atque, sit neque unde fugit.",
            'side_sub'=>"samll_slider",]);

        $departments= new Pages([
            'title'=>"Department / Units",
            'url'=>'/department-units',
            'page_img'=>'/1640593019.jpg',
            'main_content'=>"Departments And Units",
            'row_1_title'=>"",
            'row_1_img'=>"",
            'row_1_content'=>"",
            'row_1_url'=>"",
            'row_2_title'=>"",
            'row_2_img'=>"",
            'row_2_content'=>"",
            'row_2_url'=>"",
            'side_title'=>"",
            'side_img'=>"",
            'side_content'=>"",
            'side_url'=>"",
            'side_sub'=>"samll_slider",]);


        $programmes= new Pages([
            'title'=>"Programmes",
            'url'=>'/programmes',
            'page_img'=>'/1640593019.jpg',
            'main_content'=>"Programmes",
            'row_1_title'=>"",
            'row_1_img'=>"",
            'row_1_content'=>"",
            'row_1_url'=>"",
            'row_2_title'=>"",
            'row_2_img'=>"",
            'row_2_content'=>"",
            'row_2_url'=>"",
            'side_title'=>"",
            'side_img'=>"",
            'side_content'=>"",
            'side_url'=>"",
            'side_sub'=>"samll_slider",]);

            $programmes= new Pages([
                'title'=>"Programmes",
                'url'=>'/programmes',
                'page_img'=>'/1640593019.jpg',
                'main_content'=>"Programmes",
                'row_1_title'=>"",
                'row_1_img'=>"",
                'row_1_content'=>"",
                'row_1_url'=>"",
                'row_2_title'=>"",
                'row_2_img'=>"",
                'row_2_content'=>"",
                'row_2_url'=>"",
                'side_title'=>"",
                'side_img'=>"",
                'side_content'=>"",
                'side_url'=>"",
                'side_sub'=>"samll_slider",]);

            $media= new Pages([
                    'title'=>"Media",
                    'url'=>'/media',
                    'page_img'=>'/1640593019.jpg',
                    'main_content'=>"Media",
                    'row_1_title'=>"",
                    'row_1_img'=>"",
                    'row_1_content'=>"",
                    'row_1_url'=>"",
                    'row_2_title'=>"",
                    'row_2_img'=>"",
                    'row_2_content'=>"",
                    'row_2_url'=>"",
                    'side_title'=>"",
                    'side_img'=>"",
                    'side_content'=>"",
                    'side_url'=>"",
                    'side_sub'=>"samll_slider",]);

                    $resources= new Pages([
                        'title'=>"Resources",
                        'url'=>'/resources',
                        'page_img'=>'/1640593019.jpg',
                        'main_content'=>"Resources",
                        'row_1_title'=>"",
                        'row_1_img'=>"",
                        'row_1_content'=>"",
                        'row_1_url'=>"",
                        'row_2_title'=>"",
                        'row_2_img'=>"",
                        'row_2_content'=>"",
                        'row_2_url'=>"",
                        'side_title'=>"",
                        'side_img'=>"",
                        'side_content'=>"",
                        'side_url'=>"",
                        'side_sub'=>"samll_slider",]);

                        $parastatals= new Pages([
                            'title'=>"Parastatals",
                            'url'=>'/Parastatals',
                            'page_img'=>'/1640593019.jpg',
                            'main_content'=>"Parastatals",
                            'row_1_title'=>"",
                            'row_1_img'=>"",
                            'row_1_content'=>"",
                            'row_1_url'=>"",
                            'row_2_title'=>"",
                            'row_2_img'=>"",
                            'row_2_content'=>"",
                            'row_2_url'=>"",
                            'side_title'=>"",
                            'side_img'=>"",
                            'side_content'=>"",
                            'side_url'=>"",
                            'side_sub'=>"samll_slider",]);

        $admin->pages()->saveMany([$about, $departments,$programmes,$media,  $resources,  $parastatals, $contact]);
        // $about->appendNode($services);
    }
}
