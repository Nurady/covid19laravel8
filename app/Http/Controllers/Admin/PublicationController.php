<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Publication;
use App\Http\Requests\PublicationRequest;
use Illuminate\Http\Request;

class PublicationController extends Controller
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
        $items = Publication::all();
        return view ('pages.admin.publication.index')
                ->with([ 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {
        $data = $request->all();        
        $name = $request->file('file')->getClientOriginalName();
        $data['file'] = $request->file('file')->storeAs('public/assets/publication', $name);          
        
        Publication::create($data);
        return redirect()->route('publications.index');
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
        $item = Publication::findOrFail($id);
        return view('pages.admin.publication.edit', [
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
    public function update(PublicationRequest $request, $id)
    {
        $data = $request->all();
        $data['file'] = $request->file('file')->store(
            'assets/publication', 'public'
        );
        
        $item = Publication::findOrFail($id);
        $item->update($data);
        return redirect()->route('publications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Publication::findOrFail($id);
        $item->delete();
        return redirect()->route('publications.index');
    }
}
