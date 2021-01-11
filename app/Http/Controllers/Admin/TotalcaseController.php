<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Totalcase;
use App\Http\Requests\TotalcaseRequest;
use Illuminate\Http\Request;

class TotalcaseController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Totalcase::all();
        return view ('pages.admin.totalcase.index')
                ->with([ 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.totalcase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TotalcaseRequest $request)
    {
        $data = $request->all();
       
        Totalcase::create($data);
        return redirect()->route('totalcases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Totalcase::findOrFail($id);
        return view('pages.admin.totalcase.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TotalcaseRequest $request, $id)
    {
        $data = $request->all();
        
        $item = Totalcase::findOrFail($id);
        $item->update($data);
        return redirect()->route('totalcases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Totalcase::findOrFail($id);
        $item->delete();
        return redirect()->route('totalcases.index');
    }
}
