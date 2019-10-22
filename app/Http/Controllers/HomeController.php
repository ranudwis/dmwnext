<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $greeting_message = Setting::get('greeting_message');

        return view('home', compact('greeting_message'));
    }
}
