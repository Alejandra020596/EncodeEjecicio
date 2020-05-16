@extends('layout.app')
@section('content')
<h3 class="title1">ALTA TEMARIO</h3>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-body">
		<form id="InsertaMaestro" action="{{url('temario/insertatemario')}}" method="post"> 
			{{csrf_field()}}
			<div class="form-group"> 
				<label for="nombreE">NOMBRE</label> 
				<input type="text" class="form-control" id="temario" name="temario" placeholder="TEMA" > 
			</div> 
			<div class="form-group"> 
				<label for="clave">MATERIA</label> 
				<input type="text" class="form-control" id="idmateria" name="idmateria" placeholder="MATERIA"> 
			</div>  
			
			
			 <button type="submit" class="btn btn-primary" >ENVIAR</button> </form> 
	</div>
	</div>
@endsection
<script>	

</script>