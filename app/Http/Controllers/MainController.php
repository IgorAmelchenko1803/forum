<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Section;

class MainController extends Controller
{
    public function show()
    {
        $sections = Section::all();
        return view('main', compact('sections'));
    }
}
