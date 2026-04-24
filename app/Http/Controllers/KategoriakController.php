<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriakRequest;
use App\Http\Requests\UpdateKategoriakRequest;
use App\Models\Kategoriak;

class KategoriakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Kategoriak::all();
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
    public function store(StoreKategoriakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategoriak $kategoriak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategoriak $kategoriak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriakRequest $request, Kategoriak $kategoriak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategoriak $kategoriak)
    {
        //
    }
}
