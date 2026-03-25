<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $title;
    public $description;
    public $created_at;

    public function __construct( string $id="", string $title="", string $description="", $created_at=null)
    {
        $this->id=$id;
        $this->title=$title;
        $this->description=$description;
        $this->created_at=$created_at;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
