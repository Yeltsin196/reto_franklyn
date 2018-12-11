@extends('layouts.app')
@section('content')

<div class="container">
	
	<div class="row">
		<div class="col-6 offset-3 text-center">
			<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Descripcion</th>
    
    </tr>
  </thead>
  	 @foreach($categorias as $ct)
  <tbody>
    <tr>
      
      <td>{{$ct->id}}</td>
      <td>{{$ct->Nombre}}</td>
      
    </tr>
   @endforeach
    
  </tbody>
		</div>
	</div>
</div>


@endsection