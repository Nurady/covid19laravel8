<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Release;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) 
    {
        $total = DB::table('positips')->get()->sum('jumlah');
        $totalrecovered = DB::table('recovers')->get()->sum('jumlah');
        $totalcase = DB::table('totalcases')->get()->sum('jumlah');
        $totaldeath = DB::table('deaths')->get()->sum('jumlah');
        $totalcares = DB::table('cares')->get()->sum('jumlah');
        $totalquarantines = DB::table('quarantines')->get()->sum('jumlah');
        $totalpelakukarantina = DB::table('travelers')->get()->sum('karantina');
        $totalpelakudiscarded = DB::table('travelers')->get()->sum('discarded'); 
        $totalkontakkarantina = DB::table('contacts')->get()->sum('karantina');
        $totalkontakdiscarded = DB::table('contacts')->get()->sum('discarded');
        $totalsuspectkarantina = DB::table('suspects')->get()->sum('karantina');
        $totalsuspectdiscarded = DB::table('suspects')->get()->sum('discarded');  
        $totalprobablekarantina = DB::table('probables')->get()->sum('karantina');
        $totalprobablediscarded = DB::table('probables')->get()->sum('discarded');  
        
    
        
        return view ('pages.admin.dashboard', 
        [
            'total'=> $total,
            'totalrecovered'=> $totalrecovered,
            'totalcase'=> $totalcase,
            'totaldeath'=> $totaldeath,
            'totalcares'=> $totalcares,
            'totalquarantines'=> $totalquarantines,
            'totalpelakukarantina'=> $totalpelakukarantina,
            'totalpelakudiscarded'=> $totalpelakudiscarded,
            'totalkontakkarantina'=> $totalkontakkarantina,
            'totalkontakdiscarded'=> $totalkontakdiscarded,
            'totalsuspectkarantina'=> $totalsuspectkarantina,
            'totalsuspectdiscarded'=> $totalsuspectdiscarded,
            'totalprobablekarantina'=> $totalprobablekarantina,
            'totalprobablediscarded'=> $totalprobablediscarded,
            'total_release' => Release::count(),
        ]);
    }
}
