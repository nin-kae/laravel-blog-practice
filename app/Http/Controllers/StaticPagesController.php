<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(): Factory|View|Application
    {
        return view('static_pages/home');
    }

    public function help(): Factory|View|Application
    {
        return view('static_pages/help');
    }

    public function about(): Factory|View|Application
    {
        return view('static_pages/about');
    }
}
