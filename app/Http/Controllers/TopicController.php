<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class TopicController extends Controller
{
    public function index($section)
    {
        return view('topics', compact(['section']));
    }
}
