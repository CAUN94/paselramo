<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Curso;
use App\Uni;
use DB;



class UniversitysController extends Controller
{
    public function index()
    {
    
    $university = Uni::all();
    return view ('welcome',compact('university'));
	}

	public function show(Uni $Uni)
	{
		$id=$Uni->id;
		$cursos= Curso::where('uni_id',$id)
						->orderBy('day','asc')
						->orderBy('carrera','asc')
						->get();

		$cursos=array_first($cursos);

		
		
		
		return view('university',compact('cursos'),compact('Uni'));

	}


}
