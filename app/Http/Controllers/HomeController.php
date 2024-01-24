<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_title = 'Anasayfa';
        // get the currently authenticated user information and return with the view
        return view('panel/index', ['user' => auth()->user()], compact('page_title'));
    }
}
