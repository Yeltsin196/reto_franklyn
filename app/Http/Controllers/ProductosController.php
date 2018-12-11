<?php

namespace App\Http\Controllers;

use App\productos;
use Illuminate\Http\Request;
use App\categorias  ;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
            

    public function productoregistrado(Request $request){
        try{

            //$cate= new categorias();
            //echo "string".$cate->id_enc(5);
       
            \DB::beginTransaction(); // por si algo sale mal dentro de la consulta o insercion
               
           
               

              \DB::table('productos')->insert(['Nombre'=>$request->nombre,
                'descripcion'=>$request->descripcion,
                              'precio'=>$request->precio,
                              'categoria_id'=>$request->id_c]); 
             \DB::commit();
             
               return view('productoregistrado');
   
          } catch(\Exception $e){
               \Log::info('Error al crear producto: '.$e);
               return \Response::json(["resultado"=>false],500);
          
           }
    }
    

    public function lista_productos(){

        $productos=\DB::table('productos')->join('categorias','categorias.id','productos.categoria_id')->select(
            'productos.id as p_id','productos.nombre as p_nombre','productos.descripcion as p_descripcion','productos.precio as p_precio','categorias.Nombre as categoria_n')->orderBy('productos.id','ASC')->get();




        return view('listaproductos', ['productos'=>$productos]);
    }

    public function crearproducto(){
        return view ('crearproducto');
    }


    public function productos_x_categoria(){


         $categorias  = \DB::table('categorias')
                        ->get();

        $productos = \DB::table('productos')
                        ->get();           
        
        return view('/productos_x_categoria', ['categorias'=>$categorias], ['productos'=>$productos]);
    }
    

     public function  busqueda(Request $request){

        
              $nombre= $request->nombre_producto;
             $productos = \DB::table('productos')->join('categorias','categorias.id','productos.categoria_id')->select('productos.id as p_id','productos.nombre as p_nombre', 'productos.descripcion as p_descripcion', 'productos.precio as p_precio', 'categorias.Nombre as nombrec')->where('productos.nombre','LIKE', '%'.$nombre.'%')->orderBy('productos.id', 'ASC')->get();
                  

           

            
            return view('busqueda', ['productos'=>$productos]);
     }

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
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $productos)
    {
        //
    }
}
