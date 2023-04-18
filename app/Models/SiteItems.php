<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'text',
        'sub_text',
        'category',
        'site_area',
    ];
}
