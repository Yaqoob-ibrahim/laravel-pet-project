<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $iconClass;
    public $content;
    public $image;
    public $name;
    public $designation;

    public function __construct($iconClass, $content, $image, $name, $designation)
    {
        $this->iconClass = $iconClass;
        $this->content = $content;
        $this->image = $image;
        $this->name = $name;
        $this->designation = $designation;
    }

    public function render()
    {
        return view('components.card');
    }
}
