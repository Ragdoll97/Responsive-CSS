<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowPagesController extends Controller
{
    public function showTeaWeb(){
        return view('TeaWeb');
    }

    public function ShowLogin(){
        return view('Login');
    }
    public function ShowCssWeb(){
        return view('Css');
    }
}