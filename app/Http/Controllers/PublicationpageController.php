<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationpageController extends Controller
{
    public function index()
    {
        // $items = Publication::orderBy('id', 'DESC')->paginate(20);
        $items = Publication::orderBy('id', 'DESC')->get();

        return view ('pages.frontend.publication')
                ->with([ 'items' => $items]);
    }
}
