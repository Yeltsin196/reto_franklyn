@extends('layouts.app')
@section('content')


	<div class="container">
		<div class="row">
			<div class=" col-5 offset-3">
					@foreach($categorias as $c)
					{{ $band =false }}
		<ul class="list-group">
  			
			  
					  <li class="list-group-item active">Categoria {{$c->Nombre}}</li> 
							@foreach($productos as $p)
							@if($c->id == $p->categoria_id)

							<?php  $band=true; ?>
							  <li class="list-group-item">{{$p->nombre}}</li>
								
							@endif

							@endforeach

							@if($band==false)
							<li class="list-group-item">No posee Productos</li>
							@endif
				</ul>
			
			
				@endforeach


			</div>
		</div>
	</div>
		
		
	
@endsection