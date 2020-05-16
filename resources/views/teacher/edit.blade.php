@extends('layout.app')
@section('content')
<h3 class="title1">ALTA MAESTRO</h3>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-body">
		<form id="InsertaMaestro" action="{{url('teacher/Updateteacher/'.$teach->id)}}')}}" method="post"> 
			{{csrf_field()}}
			<div class="form-group"> 
				<label for="nombreE">NOMBRE</label> 
				<input type="text" class="form-control" id="name" name="name" value="{{$teach->name}}" > 
			</div> 
			<div class="form-group"> 
				<label for="clave">APELLIDOS</label> 
				<input type="text" class="form-control" id="last_name" name="last_name" value="{{$teach->last_name}}"> 
			</div> 
			<div class="form-group"> 
				<label for="control">NIVEL DE ESTUDIOS</label> 
				<input type="text" class="form-control" id="level_study" name="level_study" value="{{$teach->level_study}}"> 
			</div> 
			
			<div class="form-group"> 
				<label for="direccionE">E-MAIL</label> 
				<input type="email" class="form-control" id="email" name="email" value="{{$teach->email}}" > 
			</div> 
			<div class="form-group"> 
				<label for="direccionE">PASSWORD</label> 
				<input type="password" class="form-control" id="password" name="password" value="{{$teach->password}}"> 
			</div> 
			
			
			 <button type="submit" class="btn btn-primary" >ENVIAR</button> </form> 
	</div>
	</div>
@endsection
<script>	

</script>