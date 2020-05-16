@extends('layout.app')
@section('content')
<h3 class="title1">ALTA ESCUELA</h3>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-body">
		<form id="InsertaMaestro" action="{{url('school/insertaEscuela')}}" method="post"> 
			{{csrf_field()}}
			<div class="form-group"> 
				<label for="nombreE">NOMBRE</label> 
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE"> 
			</div> 
			<div class="form-group"> 
				<label for="clave">CLAVE</label> 
				<input type="text" class="form-control" id="clave" name="clave" placeholder="CLAVE"> 
			</div> 
			<div class="form-group"> 
				<label for="control">CONTROL</label> 
				<input type="text" class="form-control" id="control" name="control" placeholder="CONTROL"> 
			</div> 
			
			<div class="form-group"> 
				<label for="direccionE">DIRECCION</label> 
				<input type="text" class="form-control" id="direccion" name="direccion" placeholder="DIRECCION"> 
			</div> 
			<div class="form-group"> 
				<label for="direccionE">MUNICIPIO</label> 
				<input type="text" class="form-control" id="municipio" name="municipio" placeholder="MUNICIPIO"> 
			</div> 
			
			
			 <button type="submit" class="btn btn-primary" >ENVIAR</button> </form> 
	</div>
	</div>
@endsection
<script>	

</script>