<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\scholl;


class UsersController extends Controller
{
	public function index()
	{
		$teacher = users::orderBy('id','DESC')->paginate(3);
	    return view('teacher.index',compact('teacher'));
	}
	public function formTeacher()
	{
		return view('teacher.formTeacher');
	}
	public function insertaTeacher(Request $request)
	{
		$datosTeacher = request()->except('_token');
		users::insert($datosTeacher);
		return	 redirect('teacherIndex');
	}
	public function indexT()
	{
		$datos['teacher']=users::paginate(10);
		return view('teacher.index',$datos);
	}
	public function edit($id)
	{
		$teach = users::findOrFail($id);

		return view('teacher.edit',compact('teach'));
	}
	public function update(Request $request,$id)
	{
		$datosTeacherUpdate = request()->except(['_token','_method']);
		users::where('id','=',$id)->update($datosTeacherUpdate);
		$teach = users::findOrFail($id);

		return	 redirect('teacherIndex');
	}
	public function destroy($id)
	{
		// dump($id);
		users::destroy($id);
		return	 redirect('teacherIndex');
	}
    
}

