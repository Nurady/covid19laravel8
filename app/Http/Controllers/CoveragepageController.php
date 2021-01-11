<?php

namespace App\Http\Controllers;

use App\Models\Coverage;
// use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class CoveragepageController extends Controller
{
    public function index()
    {
        $images = Coverage::latest()->first();
        // $items = Release::orderBy('id', 'DESC')->paginate(5);        
        // dd($items);
        // Paginator::useBootstrap();

        return view ('pages.frontend.coverage')
                ->with([ 'images' => $images]);
    }
}
