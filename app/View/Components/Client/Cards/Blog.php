<?php

namespace App\View\Components\Client\Cards;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Blog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $tag = '',
        public string $thumbnail = '',
        public string $title = '',
        public string $avatar = '',
        public string $author = '',
        public string $time = '',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.cards.blog');
    }
}
