<!DOCTYPE html>

  <html lang="en">

  <head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link REL="SHORTCUT ICON"
       HREF="../img/logo.jpeg">

  <title>Paselramo</title>

<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: 
http://bootswatch.com/flatly/ -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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








    </head>

    <body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
    <li class="hidden">
    <a href="#page-top"></a>
    </li>

    <li class="page-scroll">
    <a href="#about">@yield('about')</a>
    </li>
    <li class="page-scroll">
    <a href="#portfolio">@yield('portfolio')</a>
    </li>
    <li class="page-scroll">
    <a href="#funcion">Cómo funciona</a>
    </li><li class="page-scroll">
    <a href="#contact">Contáctanos</a>
    </li>
    </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
    </nav>

    <header>
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="intro-text">
     
    <h1>@yield('title')</h1>
    <hr class="star-light">
   
     
    </div>
    </div>
    </div>
    </div>
    </header>




    <section id="about">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    
    <h3>@yield('primerdiv')</h3>
 
    </div>
    
    @yield('firstrow')



    </section>

    <section class="success"  id="portfolio">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    
    <h3>@yield('seconddiv')</h3>
    <hr class="star-light">

    @yield('secondrow')

    </div>
    </div>

    </div>

    </section>



    <section   id="funcion">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    <h3>Cómo funciona</h3>
    <hr class="star-primary">

    </div>
    </div>
    <div class="row">

    <div class="col-sm-4 portfolio-item">

    <img src="../img/portfolio/info.png"  class="img-responsive" alt="">
    <center> <h3>Informacion</h3></center>
    <hr>
    <p>

    Las clases tienen una duración de 4 horas y son impartidas por los mejores estudiantes o ayudantes de tu universidad. </p>
    <p>

    Como la idea es generar un espacio idóneo para el conocimiento contamos con una infraestructura adecuada y el grupo de trabajo puede ser solo de 4 a 8 personas.
    </p>

    </div>

    <div class="col-sm-4 portfolio-item">

    <img src="../img/portfolio/curso.png"  class="img-responsive" alt="">
    <center><h3>Curso</h3></center>
    <hr>

    <p>

    Los cursos a impartir son los mas complejos de tu facultad. En la seccion "Universidades" puedes revisar la lista completa.
    </p>
    <p>

    Como queremos estar al alcance de tu bolsillo las clases tienen un costo de $5.000 por hora dando un total de $20.000.
    </p>

    </div>


    <div class="col-sm-4 portfolio-item">

    <img src="../img/portfolio/pago.png"  class="img-responsive" alt="">
    <center><h3>Pago</h3></center>
    <hr>
    <p>

    Para realizar el pago solo elige tu curso, ingresa tus datos y realiza la transferencia para asegurar tu cupo.
    </p>

    </div>



    </div>
    </div>

    </section>

    <section class="success" id="contact">
    <div class="row">
    <div class="col-lg-12 text-center">
    <h3>Contáctanos</h3>
    <hr class="star-light">
    </div>
    </div>
    </section>

    <!-- Contact Section -->
    <section >
    <div class="container">

    <div class="row">

         <!-- Mapa -->
    <!--<div class="col-lg-4 " id="googleMap" style="width:500px;height:500px;"></div>-->
    <!--<div class="col-lg-offset-2  col-lg-4">-->


    <div class="col-lg-12">
    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
    <form name="sentMessage" id="contactForm" novalidate>
    <div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label>Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Please enter your name.">
    <p class="help-block text-danger"></p>
    </div>
    </div>
    <div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label>Mail</label>
    <input type="email" class="form-control" placeholder="Mail" id="email" required data-validation-required-message="Please enter your email address.">
    <p class="help-block text-danger"></p>
    </div>
    </div>
    <div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label>Telefono</label>
    <input type="tel" class="form-control" placeholder="Telefono" id="phone" required data-validation-required-message="Please enter your phone number.">
    <p class="help-block text-danger"></p>
    </div>
    </div>
    <div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label>Mensaje</label>
    <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
    <p class="help-block text-danger"></p>
    </div>
    </div>
   
    <div id="success"></div>
    <div class="row">
    <div class="form-group col-xs-12">
    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </section>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ubicación</h3>
                        <p>Por Definir<br>------</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>En la web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                         
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contacto</h3>
                        <p>+569 64510670</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; paselramo.cl 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
    <i class="fa fa-chevron-up"></i>
    </a>
    </div>

    <!-- Portfolio Modals -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

    </body>

    </html>