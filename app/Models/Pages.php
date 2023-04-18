<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Laracasts\Presenter\PresentableTrait;

class Pages extends Model
{
    use HasFactory;
    use NodeTrait;
    use PresentableTrait;

    protected $presenter = 'App\Presenters\PagePresenter';

    protected $fillable = [
        'title',
        'url',
        'page_img',
        'main_content',
        'row_1_title',
        'row_1_img',
        'row_1_content',
        'row_1_url',
        'row_2_title',
        'row_2_img',
        'row_2_content',
        'row_2_url',
        'side_title',
        'side_img',
        'side_content',
        'side_url',
        'side_sub',
    ];

    public function user()
    {
        return $this->hasMany('App\Models\user');
    }

    public function updateOrder($order, $orderPage)
    {
        $relative = Pages::findOrFail($orderPage);

        if ($order == 'before') {
            $this->beforeNode($relative)->save();
        } else if ($order == 'active') {
            $this->afterNode($relative)->save();
        } else {
            $relative->appendNode($this);
        }

        Pages::fixTree();
    }
}
