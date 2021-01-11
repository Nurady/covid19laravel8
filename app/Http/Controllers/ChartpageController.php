<?php

namespace App\Http\Controllers;

// use App\Models\Coverage;
use Illuminate\Http\Request;

class ChartpageController extends Controller
{
    public function index()
    {
        return view ('pages.frontend.chart');
    }
}
