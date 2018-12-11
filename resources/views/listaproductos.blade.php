@extends('layouts.app')
@section('content')

		<div class="list-group">
 
  
  	<div class="container">
  	<div class=" row">
  		<div class="col-8 offset-2 text-center" align="center" >
 		 <table class="table">
				  <tr>
				   <th>Id</th>
				   <th>Nombre</th>
				   <th>Descripcion</th>
				   <th>Precio</th>
				    <th>Categoria</th>
				 </tr>
  	 @foreach($productos as $producto)
 		<tr>

  		 <td>{{$producto->p_id}}</td>
  		 <td>{{$producto->p_nombre}}</td>
  		  <td>{{$producto->p_descripcion}}</td>
  		   <td>{{$producto->p_precio}}</td>
  	 		<td>{{$producto->categoria_n}}</td>
		 </tr>
   	 @endforeach

	</div>


   	 </div>
  		</div>
 
</table>
</div>
@endsection