@extends('layouts.app')

@section('content')

<form action="{{ url('/categoriaregistrada') }}" method="POST">
	{{ csrf_field() }}
	<div class="col-8 col-md-12 text-md-center">
        	<label class="text-md-center">Categoria</label>
           
        </div>
        <div class="col-8 col-md-12 text-md-center" name="div1" style="padding: 5px">
        <input type="text" name="nombre" >
		</div>
		<div class="form-check  col-2 offset-5" align="center">
      <button type="submit" class="btn btn-primary">Submit</button>

      </div> 
</form>
        
@endsection