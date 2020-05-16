<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scholl;
class SchoolController extends Controller
{
	public function index()
	{
		$datos['schollI']=scholl::paginate(10);
		return view('school.index',$datos);
	}
    public function formEscuela()
	{
		return	view('school.formEscuela');
	}
	public function insertaEscuela(Request $request)
	{
		// $datosEscuela = request()->all();
		$datosEscuela = request()->except('_token');
		scholl::insert($datosEscuela);
		return	 redirect('schoolIndex');
        // scholl::create($request->all());
        // return redirect()->route('teacher.index')->with('success','Registro creado satisfactoriamente');
		// dump($request);
	}
	public function edit($id)
	{
		$scho = scholl::findOrFail($id);

		return view('school.edit',compact('scho'));
	}
	public function update(Request $request,$id)
	{
		$datosEscuelaUpdate = request()->except(['_token','_method']);
		scholl::where('id','=',$id)->update($datosEscuelaUpdate);
		$scho = scholl::findOrFail($id);

		return	 redirect('schoolIndex');
	}
	public function destroy($id)
	{
		dump($id);
		scholl::destroy($id);
		return	 redirect('schoolIndex');
	}
    
}
