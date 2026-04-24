<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTevekenysegekRequest;
use App\Http\Requests\UpdateTevekenysegekRequest;
use App\Models\Tevekenysegek;

class TevekenysegekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tevekenysegek::all();
    }
    public function tevekenysegekKategoriaval($id)
    {
        return Tevekenysegek::where('kat_id', $id)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTevekenysegekRequest $request)
    {
        $tevekenysegek = new Tevekenysegek();
        $tevekenysegek->kat_id = $request->kat_id;
        $tevekenysegek->tev_nev = $request->tev_nev;
        $tevekenysegek->allapot = $request->allapot;
        $tevekenysegek->save();

        return response()->json($tevekenysegek, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tevekenysegek $tevekenysegek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tevekenysegek $tevekenysegek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTevekenysegekRequest $request, $id)
    {
        $tevekenysegek =  Tevekenysegek::find($id);
        $tevekenysegek->kat_id = $request->kat_id;
        $tevekenysegek->tev_nev = $request->tev_nev;
        $tevekenysegek->allapot = $request->allapot;
        $tevekenysegek->save();

        return response()->json(['message'=>'Sikeres frissités'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tevekenysegek $tevekenysegek)
    {
        $tevekenysegek = Tevekenysegek::find($id);
        if($tevekenysegek){
            $tevekenysegek->delete();
            return response()->json(['message'=>"Sikeres törlés"], 200);
        }
        return response()->json(['message'=>'Elem nem található'], 404);
    }
}
