<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function terms()
    {
		return view('terms');
    }

    public function privacyPolicy()
    {
    	return view('privacy');
    }

    public function about()
    {
    	return view('about');
    }

    public function coaching()
    {
    	return view('oneonone');
    }
}
