@extends('layout.app')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>TEMA</th>
			<th>MATERIA</th>
			<th colspan="2"><center>Accion</center></th>	
			
		</tr>
	</thead>
	<tbody>	
		@foreach($temario as $mat)
		<tr>
			<td>{{$mat->id}}</td>
			<td>{{$mat->temario}}</td>			
			<td>{{$mat->idmateria}}</td>
			<td><center><a href="{{url('temarioEd/'.$mat->id.'/edit')}}"><button class="btn btn-warning">EDITAR</button></a></center></td>
			<td>
				<form method="POST" action="{{url('temarioIndexD/'.$mat->id)}}">
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