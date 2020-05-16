<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materia;
use App\users;

class MateriaController extends Controller
{
    public function index()
	{
		$datos['materia']=materia::paginate(10);
		return view('materia.index',$datos);
	}
    public function formmateria()
	{
		return	view('materia.formmateria');
	}
	public function insertamateria(Request $request)
	{
		// $datosMateria = request()->all();
		$datosMateria = request()->except('_token');
		materia::insert($datosMateria);
		return	 redirect('materiaIndex');
	}
	public function edit($id)
	{
		$materia = materia::findOrFail($id);

		return view('materia.edit',compact('materia'));
	}
	public function update(Request $request,$id)
	{
		$datosMateriaUpdate = request()->except(['_token','_method']);
		materia::where('id','=',$id)->update($datosMateriaUpdate);
		$materia = materia::findOrFail($id);

		return	 redirect('materiaIndex');
	}
	public function destroy($id)
	{
		dump($id);
		materia::destroy($id);
		return	 redirect('materiaIndex');
	}
    
}
