@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-8 offset-3">
					<table  class="table table-hover">
					<tr>
								   <th>Id</th>
								   <th>Nombre</th>
								   <th>Descripcion</th>
								   <th>Precio</th>
								    <th>Categoria</th>
					 </tr>
					 @foreach ($productos as $producto)
					 <tr>

				  		 <td>{{$producto->p_id}}</td>
				  		 <td>{{$producto->p_nombre}}</td>
				  		  <td>{{$producto->p_descripcion}}</td>
				  		   <td>{{$producto->p_precio}}</td>
				  	 		<td>{{$producto->nombrec}}</td>
					</tr>
						@endforeach
				</table>
		</div>
	</div>
</div>
				

@endsection