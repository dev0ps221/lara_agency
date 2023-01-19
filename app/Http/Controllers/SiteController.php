<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    private $views = [
        'home','about','services','contact'
    ];

    function render($view){
        return view(in_array($view,$this->views) ? $view : 'notfound');
    }
    function home(){
        return redirect('/home');
    }
}
