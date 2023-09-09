<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beritawebController extends Controller
{
    public function show()
    {
        return view('website.berita');
    }
    public function beritaview()
    {
        return view('website.beritaview');
    }
}
