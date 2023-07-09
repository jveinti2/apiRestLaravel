<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Articulos = Articulo::all();
        return $Articulos;
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
    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->description = $request->description;
        $articulo->price = $request->price;
        $articulo->stock = $request->stock;
        $articulo->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $articulo = Articulo::findOrFail($request->id);
        $articulo->description = $request->description;
        $articulo->price = $request->price;
        $articulo->stock = $request->stock;
        $articulo->save();
        return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Articulo::destroy($request->id);
        return $articulo;
    }
}
