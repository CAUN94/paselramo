<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Curso;
use App\Inscrito;
use App\Uni;
class AdminController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
		return view('Auth');
	}

	

    public function Alumnos()
    {

        return view('alumnosopc');

    }



    public function AlumnosMostrar($estado)
    {

        $Inscrito = Inscrito::where('Solicitud', $estado)->orderBy('curso_id', 'desc')->orderBy('horario')->get();
        $Uni=Uni::all();
        $Curso=Curso::all();


    	return view('alumnos',compact('Inscrito','Uni','estado','Curso'));
    }

      public function AlumnosDelete($idAlumno)
    {
         $alumno= Inscrito::find($idAlumno);
         $curso= Curso::find($alumno->curso_id);
         if($alumno->Solicitud == 'Inscribir')
        {
         $curso->cupos= $curso->cupos + 1;
         $curso->save();
        }
         $alumno->delete();

         return back();
    }

    public function Cursos()
    {
    	$Uni=Uni::all();
    	return view('CursosAdmin',compact('Uni'));
    }

     public function CursosShow(Uni $Uni)
    {   
        $cursos=$Uni->cursos;
        return view('CursosShow',compact('cursos'),compact('Uni'));
    }

     public function UpdateShow($idCurso)
    {   
     $Curso= Curso::find($idCurso);
     return view('CursosUpdate',compact('Curso'));
    }

     public function CursosUpdate(Request $request, $idCurso)
    {   
   
         $curso= Curso::find($idCurso);
         $curso->uni_id=$request->Uni;
         $curso->curso=$request->Curso;
         $curso->carrera=$request->Carrera;
         $curso->horario=$request->Horario;
         $curso->day=$request->Day;
         $curso->ubicacion=$request->Ubicacion;
         $curso->cupos=$request->Cupo;
         $curso->save();
      return back();
    }

      public function CursoAgregar(Request $request, $Uni)
    {
         $curso= new Curso;
         $curso->uni_id=$Uni;
         $curso->curso=$request->Curso;
         $curso->carrera=$request->Carrera;
         $curso->horario=$request->Horario;
         $curso->day=$request->Day;
         $curso->ubicacion=$request->Ubicacion;
         $curso->cupos=$request->Cupo;
         $curso->save();

    	return back();
    }

     public function CursoBorrar($idCurso)
    {
         $curso= Curso::find($idCurso);

         $curso->delete();

        return back();
    }

     
}
