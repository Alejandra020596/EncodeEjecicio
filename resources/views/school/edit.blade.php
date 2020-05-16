@extends('layout.app')
@section('content')
<h3 class="title1">ALTA ESCUELA</h3>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-body">
		<form id="UpdateEscuela" action="{{url('school/UpdateEscuela/'.$scho->id)}}" method="post"> 
			{{csrf_field()}}
			<div class="form-group"> 
				<label for="nombreE">NOMBRE</label> 
				<input type="text" class="form-control" id="nombre" name="nombre" value="{{$scho->nombre}}"> 
			</div> 
			<div class="form-group"> 
				<label for="clave">CLAVE</label> 
				<input type="text" class="form-control" id="clave" name="clave" value="{{$scho->clave}}"> 
			</div> 
			<div class="form-group"> 
				<label for="control">CONTROL</label> 
				<input type="text" class="form-control" id="control" name="control" value="{{$scho->control}}"> 
			</div> 
			
			<div class="form-group"> 
				<label for="direccionE">DIRECCION</label> 
				<input type="text" class="form-control" id="direccion" name="direccion" value="{{$scho->direccion}}"> 
			</div> 
			<div class="form-group"> 
				<label for="direccionE">MUNICIPIO</label> 
				<input type="text" class="form-control" id="municipio" name="municipio" value="{{$scho->municipio}}"> 
			</div> 
			
			
			 <button type="submit" class="btn btn-primary" >EDITAR</button> </form> 
	</div>
	</div>
@endsection
