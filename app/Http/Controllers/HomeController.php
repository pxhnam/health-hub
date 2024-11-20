<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.pages.home.index');
    }
    public function about()
    {
        $breadcrumb = [
            ['name' => 'Home', 'route' => 'home'],
            ['name' => 'About', 'current' => true]
        ];
        return view('client.pages.home.about', [
            'breadcrumb' => $breadcrumb
        ]);
    }
}
