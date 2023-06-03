<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Noticia::get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $noticia = Noticia::create($request->all());
        return $noticia;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Noticia::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->update($request->all());
        return $this->show($noticia->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return $noticia;
    }
}
