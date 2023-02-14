<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konser = Konser::orderBy('id', 'desc')->paginate(5);
        return view('konser.index', compact('konser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konser.pesan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konser  $konser
     * @return \Illuminate\Http\Response
     */
    public function show(Konser $konser)
    {
        $konsers = Konser::findOrFail($konser);
        return view('konser.pesan', compact('konsers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konser  $konser
     * @return \Illuminate\Http\Response
     */
    public function edit(Konser $konser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konser  $konser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konser $konser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konser  $konser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konser $konser)
    {
        //
    }
}
