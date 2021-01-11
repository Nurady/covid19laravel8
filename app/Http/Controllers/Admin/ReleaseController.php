<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Release;
use App\Http\Requests\ReleaseRequest;
use Illuminate\Http\Request;

class ReleaseController extends Controller
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
        $items = Release::all();
        return view ('pages.admin.release.index')
                ->with([ 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.release.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReleaseRequest $request)
    {
        $data = $request->all();        
        $name = $request->file('file')->getClientOriginalName();
        $data['file'] = $request->file('file')->storeAs('public/assets/release', $name);          
        
        Release::create($data);
        return redirect()->route('release.index');
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
        $item = Release::findOrFail($id);
        return view('pages.admin.release.edit', [
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
    public function update(ReleaseRequest $request, $id)
    {
        $data = $request->all();
        $data['file'] = $request->file('file')->store(
            'assets/release', 'public'
        );
        
        $item = Release::findOrFail($id);
        $item->update($data);
        return redirect()->route('release.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Release::findOrFail($id);
        $item->delete();
        return redirect()->route('release.index');
    }
}
