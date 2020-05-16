@extends('layout.app')
@section('content')
<h3 class="title1">ALTA MAESTRO</h3>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-body">
		<form id="InsertaMaestro" action="{{url('teacher/insertaTeacher')}}" method="post"> 
			{{csrf_field()}}
			<div class="form-group"> 
				<label for="nombreE">NOMBRE</label> 
				<input type="text" class="form-control" id="name" name="name" placeholder="NOMBRE"> 
			</div> 
			<div class="form-group"> 
				<label for="clave">APELLIDOS</label> 
				<input type="text" class="form-control" id="last_name" name="last_name" placeholder="APELLIDOS"> 
			</div> 
			<div class="form-group"> 
				<label for="control">NIVEL DE ESTUDIOS</label> 
				<input type="text" class="form-control" id="level_study" name="level_study" placeholder="NIVEL ESTUDIOS"> 
			</div> 
			
			<div class="form-group"> 
				<label for="direccionE">E-MAIL</label> 
				<input type="email" class="form-control" id="email" name="email" placeholder="E-MAIL"> 
			</div> 
			<div class="form-group"> 
				<label for="direccionE">PASSWORD</label> 
				<input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD	"> 
			</div> 
			
			
			 <button type="submit" class="btn btn-primary" >ENVIAR</button> </form> 
	</div>
	</div>
@endsection
<script>	

</script>