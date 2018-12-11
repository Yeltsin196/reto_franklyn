<?php

namespace App\Http\Controllers;

use App\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show(categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(categorias $categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorias $categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorias $categorias)
    {
        //
    }



    public function categoriacreada(Request $request){
  
        try{

         \DB::beginTransaction();

            $nombre = $request->nombre;
           
           \DB::table('categorias')->insert(['Nombre'=>$nombre]); 
          \DB::commit();
          
            return view('categoriacreada');

       } catch(\Exception $e){
            \Log::info('Error al crear categoría: '.$e);
            return \Response::json(["resultado"=>false],500);
       
        }

     //   return view ('categoriacreada');
    }

    public function lista_categorias(){
        $categorias = \DB::table('categorias')->get();
        return view('listacategorias',['categorias'=>$categorias]);
    }
    

}
