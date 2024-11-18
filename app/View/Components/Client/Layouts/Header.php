<?php

namespace App\View\Components\Client\Layouts;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Header extends Component
{
    public $menu = [];
    public $contacts = [];
    public $phoneNumber;
    public $email;
    public function __construct()
    {
        $this->phoneNumber = '+00 123 4455 6666';
        $this->email = 'pxhnam@gmail.com';
        $this->menu = [
            ['name' => 'Home', 'route' => 'home'],
            ['name' => 'About US', 'route' => 'about'],
            ['name' => 'Doctor', 'route' => 'doctor'],
            ['name' => 'News', 'route' => 'news'],
            ['name' => 'Contact', 'route' => 'contact'],
        ];
        $this->contacts = [
            ['link' => '#', 'icon' => 'mai-logo-facebook-f'],
            ['link' => '#', 'icon' => 'mai-logo-twitter'],
            ['link' => '#', 'icon' => 'mai-logo-dribbble'],
            ['link' => '#', 'icon' => 'mai-logo-instagram'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.layouts.header');
    }
}
