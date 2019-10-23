<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::getMultiple('greeting_message', 'about');

        return view('home', compact('settings'));
    }
}
