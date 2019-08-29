<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;

class StuffController extends Controller
{
    public function index()
    {
        $stuffs = Stuff::all();
        return view('pages.stuff.index',compact('stuffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.stuff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stuff = new \App\Stuff();
        $stuff->stuff_code = $request->stuff_code;
        $stuff->stuff_name = $request->stuff_name;
        $stuff->save();

        return redirect()->route('stuff.index');
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
        $stuff = Stuff::find($id);
        return view('pages.stuff.edit',compact('stuff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stuff = Stuff::findOrFail($id);
        $stuff->stuff_code = $request->stuff_code;
        $stuff->stuff_name = $request->stuff_name;
        $stuff->update();

        return redirect()->route('stuff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stuff = Stuff::findOrFail($id)->delete();

        return redirect()->route('stuff.index');
    }
}
