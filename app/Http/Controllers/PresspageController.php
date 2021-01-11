<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class PresspageController extends Controller
{
    public function index()
    {
        $items = Release::orderBy('id', 'DESC')->get();

        return view ('pages.frontend.release')
                ->with([ 'items' => $items]);
    }
}
