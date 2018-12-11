@extends('layouts.app')

@section('content')



<form method="POST" action="{{ url('/productoregistrado') }}" >
   {{ csrf_field() }}
<div class="row">

  <div class="form-group col-3 offset-4">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" required="" name="nombre" aria-describedby="" placeholder="Nombre producto" >
    
  </div>

  <div class="form-group col-3 offset-4">
    <label for="Descripcion">Descripcion</label>
    <input type="text" class="form-control" required="" name="descripcion" placeholder="Descripcion">
  </div>

    <div class="form-group col-3 offset-4">
    <label for="Descripcion">Precio</label>

    <input type="number"  required="" name="precio" placeholder="Precio" step=0.01 >
    </div>

    <div class="form-group col-3 offset-4" >
       <select class="custom-select crear" required name="id_c">
        <option value="">Seleccionar Categoria</option>
          
    
      @foreach($categorias as $cate)
         <option value="{{$cate->id}}"  required> {{ $cate->Nombre}} </option>
       @endforeach
      </select>
       
    </div>




      <div class="form-check  col-3 offset-4" align="center">
      <button type="submit" class="btn btn-primary">Submit</button>

      </div>    
   
  </div>
</form>


@endsection