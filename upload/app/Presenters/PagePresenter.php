<?php
namespace App\Presenter;

use Laracasts\Presenter\Presenter;

class PagePresenter extends Presenter{

    public function paddedTitle(){
        $padding ='---';
        return $padding.$this->title;
    }
}
