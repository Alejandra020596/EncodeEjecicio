@extends('layout.app')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>CLAVE</th>
			<th>CONTROL</th>
			<th>DIRECCION</th>	
			<th>MUNICIPIO</th>
			<th colspan="2"><center>Accion</center></th>	
			
		</tr>
	</thead>
	<tbody>	
		@foreach($schollI as $school)
		<tr>
			<td>{{$school->id}}</td>
			<td>{{$school->nombre}}</td>
			<td>{{$school->clave}}</td>
			<td>{{$school->control}}</td>
			<td>{{$school->direccion}}</td>
			<td>{{$school->municipio}}</td>
			<td><center><a href="{{url('schoolEd/'.$school->id.'/edit')}}"><button class="btn btn-warning">EDITAR</button></a></center></td>
			<td>
				<form method="POST" action="{{url('schoolIndexD/'.$school->id)}}">
					 {{ csrf_field() }} 
					<!-- {{ method_field('PUT') }} -->
					<button class="	btn btn-danger" onclick="return confirm('¿Borrar?')">ELIMINAR</button>
				</form>
				
			</td>
		</tr>
		@endforeach
	</tbody>							
</table>
@endsection