<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Image;

class ImagesController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::where('ima_estado', 'ACTIVO')->get();

        return view('admin.galeria.index', ['images'=> $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'imagen' => 'required'
        ]);
        
        //Imagen
        if($request->hasFile('imagen')){

            $file = $request->file('imagen')->getClientOriginalExtension();
            $file = 'galeria_'.time().'.'.$file;
            $upload= $request->file('imagen')->move(public_path().'/img/galeria/', $file);
            
            $uploadImagen = new Image();
            $uploadImagen->ima_name = $file;
            $uploadImagen->save();

        }

        return redirect()->route('galeria.index')
            ->with('info', 'La imagen ha sido agregada con éxito');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Image::findOrFail($id);

        if(\File::exists(public_path('img/galeria/'.$imagen->ima_url))){
            \File::delete(public_path('img/galeria/'.$imagen->ima_url));
        }

        $imagen->ima_estado = 'INACTIVO';
        $imagen->ima_name = 'default.jpg';
        $imagen->save();        
        
        return back()->with('info', 'Eliminado correctamente');
    }
}
