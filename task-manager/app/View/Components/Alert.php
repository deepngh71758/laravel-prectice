<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Nette\Utils\Type;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $massage;
    public function __construct(string $type="info", string $massage="No massage")
    {
        $this->type=$type;
        $this->massage=$massage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
