@extends('layout2')

@section('head')


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paselramo</title>

<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: 
http://bootswatch.com/flatly/ -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
    var mapProp = {
    center:
    new google.maps.LatLng(51.508742, -0.120850), 
    zoom:
    5, 
    mapTypeId:
    google.maps.MapTypeId.ROADMAP
  };
    var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>

@stop

@section('title')

<h1>{{$Uni->Nombre}}</h1>

@stop

@section('about')

Cursos

@stop

@section('portfolio')

Transferencia

@stop

@section('primerdiv')
Cursos

@stop

@section('firstrow')

<div class="col-lg-12 text-center">
    
    <br>
    </div>
    </div>


    <div>

    @if(empty($cursos))

    <center><h1>No se han subido cursos</h1></center>
    
    <br>

    @else

 
    
    <table class="table table-striped">
    <tr> <td>Curso </td><td>Carrera</td><td>Día</td><td>Hora</td><td>Ubicación</td><td><center>Estado</center></td></tr>

   
    @foreach($cursos as $curso)
    @if ($curso->cupos>0)
     <tr> <td>{{$curso->curso}}</td><td>{{$curso->carrera}}</td><td>{{$curso->day}}</td><td>{{$curso->horario}}</td><td>{{$curso->ubicacion}}</td><td> <center><a class="btn btn-success btn-sm" href='/cursos/{{$curso->id}}' role="button">Inscribir</a></center></td></tr>
    @else 
    <tr> <td>{{$curso->curso}}</td><td>{{$curso->carrera}}</td><td>{{$curso->day}}</td><td>{{$curso->horario}}</td><td>{{$curso->ubicacion}}</td><td><center> <button type="button" class="btn btn-danger btn-sm">LLeno</button>&nbsp &nbsp &nbsp<a class="btn btn-warning btn-sm" href='/solicitar/{{$curso->id}}' role="button">Solicitar</a></center></td></tr>
    @endif

    @endforeach
    @endif




    </table>
    </div>

    </div>

@stop



@section('seconddiv')

Transferencia

@stop

@section('secondrow')
<div class="col-lg-4 col-lg-offset-2">
     <p align="justify">Te recordamos que solo posees 4 horas para pagar tu curso, de lo contrario tu inscripción no será válida.
<br><br><br>
    </p>
    </div>
    <div class="col-lg-4">
     
     <p align="justify">Por el momento los datos de la cuenta se deben pedir al número de contacto.
<br>
    </p>          
    </div>

@stop
