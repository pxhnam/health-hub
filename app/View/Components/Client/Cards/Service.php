<?php

namespace App\View\Components\Client\Cards;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Service extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $text,
        public string $iconClass
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.cards.service');
    }
}
