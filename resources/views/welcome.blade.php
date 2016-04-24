@extends('layout')

@section('head')


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paselramo</title>
 

<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: 
http://bootswatch.com/flatly/ -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

@section('about')

Quiénes somos

@stop

@section('portfolio')

Universidades

@stop

@section('primerdiv')

Quiénes somos

@stop

@section('primerrow')

<div class="col-lg-4 col-lg-offset-2">
    <p  <p align="justify">El staff de tutores esta compuesto por los mejores estudiantes de sus carreras en diversas universidades de Chile, con una gran experiencia tanto en ayudantías como también en clases particulares.<br><br><br>
    </p>
    </div>
    <div class="col-lg-4">
     
    <p  <p align="justify">Es nuestra tarea promover el conocimiento entre todo el alumnado. La idea es invitar a cada uno de nuestros estudiantes a desafiar sus propios límites.<br>
    </p>          
    </div>

@stop

@section('segundodiv')

Universidades

@stop

@section('segundorow')

   @foreach($university as $uni)

    <div class="col-sm-6 portfolio-item">
    <a href="/university/{{$uni->id}}" class="portfolio-link" data-toggle="modal">
    <div class="caption">
    <div class="caption-content">
    <i class="fa fa-search-plus fa-3x"></i>
    </div>
    </div>

    <img src="img/portfolio/{{$uni->Foto}}.png"  class="img-responsive" alt="">
    </a>
    </div>

    @endforeach

@stop