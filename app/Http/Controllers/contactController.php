<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

class contactController extends BaseController
{
    public function showIndex(){
        return view('index');
    }
    public function showContact(){
        return view('contact');
    }
    public function showAbout(){
        return view('about');
    }
    public function showProfile(){
        return view('profile');
    }
}
