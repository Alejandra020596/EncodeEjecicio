<?php

namespace App\Http\Controllers;
use App\temario;
use Illuminate\Http\Request;

class temarioController extends Controller
{
    
    public function index()
	{
		$datos['temario']=temario::paginate(10);
		return view('temario.index',$datos);
	}
    public function formtemario()
	{
		return	view('temario.formtemario');
	}
	public function insertatemario(Request $request)
	{
		// $datostemario = request()->all();
		$datostemario = request()->except('_token');
		temario::insert($datostemario);
		return	 redirect('temarioIndex');
	}
	public function edit($id)
	{
		$temario = temario::findOrFail($id);

		return view('temario.edit',compact('temario'));
	}
	public function update(Request $request,$id)
	{
		$datostemarioUpdate = request()->except(['_token','_method']);
		temario::where('id','=',$id)->update($datostemarioUpdate);
		$temario = temario::findOrFail($id);

		return	 redirect('temarioIndex');
	}
	public function destroy($id)
	{
		// dump($id);
		temario::destroy($id);
		return	 redirect('materiaIndex');
	}
}
