<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    
    public function index()
    {
        return view('statics.index');
    }
    public function privacy()
    {
        return view('statics.privacy');
    }
    public function faq()
    {
        return view('statics.faq');
    }

}
