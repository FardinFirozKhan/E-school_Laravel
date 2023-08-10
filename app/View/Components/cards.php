<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cards extends Component
{
    public $title;
    public $src;
    public $slogan;
    public function __construct($title,$src,$slogan)
    {
        $this->title=$title;
        $this->src=$src;
        $this->slogan=$slogan;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
