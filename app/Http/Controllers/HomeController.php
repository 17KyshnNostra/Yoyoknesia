<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about-us');
    }

    public function portofolio()
    {
        return view('porto');
    }

    public function company()
    {
        return view('company');
    }

    public function dokumentasi()
    {
        return view('dokumentasi');
    }

}
