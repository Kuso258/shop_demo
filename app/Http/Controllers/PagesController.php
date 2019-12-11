<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {   
        if(View::exists('pages.root')){
            return view('pages.root');
            // return view('layouts.app');
            // return view('welcome');
        }
    }
}
