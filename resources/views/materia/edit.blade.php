@extends('layout.app')
@section('content')
<h3 class="title1">ALTA MAESTRO</h3>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-body">
		<form id="InsertaMaestro" action="{{url('materia/Updatemateria/'.$materia->id)}}')}}" method="post"> 
			{{csrf_field()}}
			<div class="form-group"> 
				<label for="nombreE">NOMBRE</label> 
				<input type="text" class="form-control" id="materia" name="materia" value="{{$materia->materia}}" > 
			</div> 
			<div class="form-group"> 
				<label for="clave">MAESTRO</label> 
				<input type="text" class="form-control" id="idmaestro" name="idmaestro" value="{{$materia->idmaestro}}"> 
			</div> 

			
			 <button type="submit" class="btn btn-primary" >ENVIAR</button> </form> 
	</div>
	</div>
@endsection
<script>	

</script>