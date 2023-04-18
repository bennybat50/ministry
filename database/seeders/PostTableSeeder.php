<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);
        Post::truncate();

        $admin->pages()->saveMany([
            new Post([
                'title' => "Blog Post 1",
                'slug' => 'blog-post-1',
                'banner' => '1640593019.jpg',
                'thumbnail' => '1640593019.jpg',
                'excerpt'=>'Blog-Post-1',
                'body' => "This is the frist blog post",
            ]), new Post([
                'title' => "Blog Post 2",
                'slug' => 'blog-post-2',
                'banner' => '1640593019.jpg',
                'thumbnail' => '1640593019.jpg',
                'excerpt'=>'Blog-Post-2',
                'body' => "This is the Second blog post",
            ]), new Post([
                'title' => "Blog Post 3",
                'slug' => 'blog-post-3',
                'banner' => '1640593019.jpg',
                'thumbnail' => '1640593019.jpg',
                'excerpt'=>'Blog-Post-3',
                'body' => "This is the third blog post",
            ]),
        ]);
    }
}
