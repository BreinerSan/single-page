<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Webinfo;

class WebinfoController extends Controller
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
        $info = Webinfo::first();
        return view('admin.webinfo.index', ['info'=> $info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->validate($request, [
            'titulo' => 'required'
        ]);
        $webinfo = Webinfo::find($id);

        $webinfo->web_titulo = $request->titulo;
        $webinfo->web_subtitulo = $request->subtitulo;
        $webinfo->web_subti_dos = $request->subtitulo_2;
        $webinfo->web_direccion = $request->direccion;
        $webinfo->web_correo = $request->correo;
        $webinfo->web_telefono = $request->telefono;
        $webinfo->web_mision = $request->mision;
        $webinfo->web_vision = $request->vision;
        $webinfo->web_facebook = $request->facebook;
        $webinfo->web_twiter = $request->twitter;
        $webinfo->web_instagram = $request->instagram;
        $webinfo->web_google = $request->google;
        

        $webinfo->save();

        return redirect()->route('info.index')
            ->with('info', 'Se han cambiado los datos con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
