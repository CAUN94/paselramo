<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Http\Requests;
use App\Curso;
use App\Uni;
use App\Inscrito;
use DB;
use App;



class CursoController extends Controller
{

	public function index($curso)
	{  

		return view('cursos',compact('curso'));
	}

    public function indexS($curso)
    {
        return view('solicitar',compact('curso'));
    }

    public function inscribir(Curso $curso,Request $request)
    {
    $inscrito= new Inscrito;

    $inscrito->Nombre=$request->Nombre;

    $inscrito->Mail=$request->Mail;

    $inscrito->Telefono=$request->Telefono;

    $inscrito->curso_id=$curso->id;

    $inscrito->solicitud="Inscribir";

    $Uni=$curso->Uni;

    $inscrito->save();

    $curso->cupos= $curso->cupos - 1;
    
    $curso->save();

    $to = 'Paselramo@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Solicitud de inscripción";
    $email_body = "El alumno $request->Nombre quiere inscribir un ramo.\n\n"."Su mail es: $request->Mail\n\nTelefono: $request->Telefono\n";
    $headers = "From: noreply@ypaselramo.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: crugarte@alumnos.uai.cl";    
    mail($to,$email_subject,$email_body,$headers);
    return redirect()->action('UniversitysController@show',[$Uni->id."#about"]);
	}

     public function solicitar(Curso $curso,Request $request)
    {
   


    $inscrito= new Inscrito;

    $inscrito->Nombre=$request->Nombre;

    $inscrito->Mail=$request->Mail;

    $inscrito->Telefono=$request->Telefono;

    $inscrito->curso_id=$curso->id;

    $inscrito->solicitud="Solicitar";

    $Uni=$curso->Uni;

    $inscrito->save();

    return redirect()->action('UniversitysController@show',[$Uni->id."#about"]);



    }

	

}
