<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function services()
    {
        return view("services");
    }

    public function products()
    {
        return view("products");
    }

    public function blogs()
    {
        return view("blogs");
    }

    public function about()
    {

    }

    public function contact()
    {

    }
}