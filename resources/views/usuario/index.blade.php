<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href=<?php echo url()."/assets/css/bootstrap.min.css";?> rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Bienvenido/a {!!Auth::user()->name!!} {!!Auth::user()->surname!!}</a></li>
        <li><a href="logout">Cerrar Sesión</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="col-sm-3">
<nav class="navbar navbar-default sidebar " id="left-sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Reportar</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">Informes</a></li>
          </ul>
        </li>          
        <li ><a href="#">Mis anuncios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="newproduct">Subir anuncio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-upload"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="col-xs-6 col-sm-offset-1" >
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>





  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="col-sm-2"></div>


    <div class="row">
  <div class="col-sm-6 col-md-3 col-md-offset-2">
    <div class="thumbnail">
      <img src="https://dk1xgl0d43mu1.cloudfront.net/user_files/esp/product_images/000/023/388/large.png?1485376275" class="img-responsive" alt="Imagen responsive">
      <div class="caption">
        <h3>Título de la imagen</h3>
        <p>...</p>
        <p>
          <a href="#" class="btn btn-primary" role="button">Botón</a>
          <a href="#" class="btn btn-default" role="button">Botón</a>
        </p>
      </div>
    </div>
  </div>



    <div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="https://giantcdn-qu2qwwv2de7wv85rz.stackpathdns.com/remote/www.giant-bicycles.com/_upload_mx/bikes/models/xxl/TCR%20ADV%202_Blue.jpg?width=1028&height=685&mode=pad&bgcolor=white&anchor=middlecenter" class="img-responsive" alt="Imagen responsive">
      <div class="caption">
        <h3>Título de la imagen</h3>
        <p>...</p>
        <p>
          <a href="#" class="btn btn-primary" role="button">Botón</a>
          <a href="#" class="btn btn-default" role="button">Botón</a>
        </p>
      </div>
    </div>
  </div>



    <div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="data:image/jpeg;base64,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" alt="...">
      <div class="caption">
        <h3>Título de la imagen</h3>
        <p>...</p>
        <p>
          <a href="#" class="btn btn-primary" role="button">Botón</a>
          <a href="#" class="btn btn-default" role="button">Botón</a>
        </p>
      </div>
    </div>
  </div>


</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=<?php echo url()."/assets/js/bootstrap.min.js";?>></script>
  </body>
</html>