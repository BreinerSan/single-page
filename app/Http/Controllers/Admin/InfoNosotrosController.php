<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\InfoNosotros;

class InfoNosotrosController extends Controller
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
        $cards = InfoNosotros::orderBy('id', 'DESC')->paginate();

        return view('admin.InfoNosotros.index', ['cards'=> $cards]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $card = new InfoNosotros();
        return view('admin.categories.create', ['card'=> $card]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = new InfoNosotros();

        $card->nos_logo = $request->nos_logo;
        $card->nos_titulo = $request->nos_titulo;
        $card->nos_descripcion = $request->nos_descripcion;
        $card->save();

        return redirect()->route('nosotros.index', $category->id)
            ->with('info', 'Card creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = InfoNosotros::find($id);

        return view('admin.nosotros.show', ['card'=> $card]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = InfoNosotros::find($id);

        return view('admin.nosotros.edit', ['card'=> $card]);
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
        $category = Category::find($id);

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
