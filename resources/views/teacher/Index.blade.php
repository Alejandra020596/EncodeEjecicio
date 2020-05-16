@extends('layout.app')
@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>APELLIDOS</th>
			<th>NIVEL ESTUDIOS</th>
			<th>E-MAIL</th>	
			<th>PASSWORD</th>
			<th colspan="2"><center>Accion</center></th>	
			
		</tr>
	</thead>
	<tbody>	
		@foreach($teacher as $teach)
		<tr>
			<td>{{$teach->id}}</td>
			<td>{{$teach->name}}</td>
			
			<td>{{$teach->last_name}}</td>
			<td>{{$teach->level_study}}</td>
			<td>{{$teach->email}}</td>
			<td>{{$teach->password}}</td>
			<td><center><a href="{{url('teacherEd/'.$teach->id.'/edit')}}"><button class="btn btn-warning">EDITAR</button></a></center></td>
			<td>
				<form method="POST" action="{{url('teacherIndexD/'.$teach->id)}}">
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