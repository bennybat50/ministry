<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'banner',
        'thumbnail',
        'title',
        'slug',
        'body',
        'excerpt',
        'published_at',
    ];
}
