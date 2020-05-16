@extends('layout.app')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>MATERIA</th>
			<th>MAESTRO</th>
			<th colspan="2"><center>Accion</center></th>	
			
		</tr>
	</thead>
	<tbody>	
		@foreach($materia as $mat)
		<tr>
			<td>{{$mat->id}}</td>
			<td>{{$mat->materia}}</td>			
			<td>{{$mat->idmaestro}}</td>
			<td><center><a href="{{url('materiaEd/'.$mat->id.'/edit')}}"><button class="btn btn-warning">EDITAR</button></a></center></td>
			<td>
				<form method="POST" action="{{url('materiaIndexD/'.$mat->id)}}">
					 {{ csrf_field() }} 
					<!-- {{ method_field('PUT') }} -->
					<center><button class="	btn btn-danger" onclick="return confirm('¿Borrar?')">ELIMINAR</button></center>
				</form>
				
			</td>
		</tr>
		@endforeach
	</tbody>							
</table>
@endsection