<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function accueil()
    {
        return view('welcome');
    }
}
