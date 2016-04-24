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

@section('title')

Solicitar

@stop

@section('about')

Solicitar

@stop

@section('portfolio')

Transferencia

@stop



@section('firstrow')




<br>
      <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form method="POST" action="/cursos/{{$curso}}/solicitar" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="Nombre" required data-validation-required-message="Nombre">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mail</label>
                                <input type="email" class="form-control" placeholder="Mail" name="Mail" required data-validation-required-message="Mail">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefono</label>
                                <input type="tel" class="form-control" placeholder="Telefono" name="Telefono" required data-validation-required-message="Telefono">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Solicitar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

   

   
@stop



@section('seconddiv')

Transferencia

@stop

@section('secondrow')
<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-2">
    <p>Te recordamos que sólo posees de 4 horas para pagar tu curso de lo contrario tu inscripción no será válida<br>
    </p>
    </div>
    <div class="col-lg-4">
    <p>Por el momento los datos de la cuenta se deben pedir al número de contacto.
    </p>            
    </div>
    </div>  
    </div>

@stop
