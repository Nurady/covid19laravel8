<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalpageController extends Controller
{
    public function index()
    {
        $items = Hospital::All();
        return view ('pages.frontend.hospital')
                ->with([ 'items' => $items]);
    }
}
