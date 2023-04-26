<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function menu()
    {
        return view('menu');
    }

    public function team()
    {
        return view('team');
    }

    public function servis()
    {
        return view('servis');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function contact()
    {
        return view('contact');
    }
}
