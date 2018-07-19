<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class indexController extends BaseController
{
    public function showIndex(){
        return view('index');
    }
    public function showContact(){
        return view('contact');
    }
}

?>
