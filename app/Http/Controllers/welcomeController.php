<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function logger(){
        echo 'The logger is working';
    }
}
