<?php

namespace Database\Seeders;

use App\Models\ContentLibary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentLibaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContentLibary::truncate();
        ContentLibary::create(["resource_link"=>"1640593019.jpg", "status"=>"offline", "category"=>"document", "extention"=>"jpg","description"=>"We and them", ]);
        ContentLibary::create(["resource_link"=>"https://images.unsplash.com/photo-1573883429746-084be9b5cfca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80","category"=>"document",  "status"=>"online", "extention"=>"jpg","description"=>"We and them", ]);
        ContentLibary::create(["resource_link"=>"1640593019.jpg", "status"=>"offline", "category"=>"document", "extention"=>"jpg","description"=>"We and them", ]);
        ContentLibary::create(["resource_link"=>"https://images.unsplash.com/photo-1470167290877-7d5d3446de4c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80","category"=>"document",  "status"=>"online", "extention"=>"jpg","description"=>"We and them", ]);

    }
}
