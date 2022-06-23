<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function welcome_page() {
        return view('welcome');
    }
}
