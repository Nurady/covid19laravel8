<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Hospital;
use App\Http\Requests\HospitalRequest;
use Illuminate\Http\Request;

class HospitalController extends Controller
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
        $items = Hospital::all();
        return view ('pages.admin.hospital.index')
                ->with([ 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospitalRequest $request)
    {
        $data = $request->all();        
        // $name = $request->file('file')->getClientOriginalName();
        // $data['file'] = $request->file('file')->storeAs('public/assets/hospital', $name);          
        
        Hospital::create($data);
        return redirect()->route('hospital.index');
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
        $item = Hospital::findOrFail($id);
        return view('pages.admin.hospital.edit', [
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
    public function update(HospitalRequest $request, $id)
    {
        $data = $request->all();
        // $data['file'] = $request->file('file')->store(
        //     'assets/hospital', 'public'
        // );
        
        $item = Hospital::findOrFail($id);
        $item->update($data);
        return redirect()->route('hospital.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hospital::findOrFail($id);
        $item->delete();
        return redirect()->route('hospital.index');
    }
}
