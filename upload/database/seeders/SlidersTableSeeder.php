<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Slider::truncate();
        Slider::create(["title"=>"Welcome to Site Template", "sub_title"=>"Feel free to explore this template", "category"=>"home","image"=>"1640593019.jpg", "url"=>"/about" ]);
        Slider::create(["title"=>"Welcome to Site Template", "sub_title"=>"Feel free to explore this template","category"=>"pages", "image"=>"1640593019.jpg", "url"=>"/about" ]);
        Slider::create(["title"=>"Welcome to Site Template", "sub_title"=>"Feel free to explore this template","category"=>"pages", "image"=>"1640593019.jpg", "url"=>"/about" ]);
        Slider::create(["title"=>"Welcome to Site Template", "sub_title"=>"Feel free to explore this template","category"=>"pages", "image"=>"1640593019.jpg", "url"=>"/about" ]);
    }
}
