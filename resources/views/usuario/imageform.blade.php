
@extends('layouts.sideAndnav')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Agregar Imagen - Compra Venta UCM</title>

    <!-- Bootstrap -->
    <link href=<?php echo url()."/assets/css/bootstrap.min.css";?> rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href=<?php echo url()."/images//apple-icon-57x57.png"?>>
		<link rel="apple-touch-icon" sizes="60x60" href=<?php echo url()."/images//apple-icon-60x60.png"?>>
		<link rel="apple-touch-icon" sizes="72x72" href=<?php echo url()."/images//apple-icon-72x72.png"?>>
		<link rel="apple-touch-icon" sizes="76x76" href=<?php echo url()."/images//apple-icon-76x76.png"?>>
		<link rel="apple-touch-icon" sizes="114x114" href=<?php echo url()."/images//apple-icon-114x114.png"?>>
		<link rel="apple-touch-icon" sizes="120x120" href=<?php echo url()."/images//apple-icon-120x120.png"?>>
		<link rel="apple-touch-icon" sizes="144x144" href=<?php echo url()."/images//apple-icon-144x144.png"?>>
		<link rel="apple-touch-icon" sizes="152x152" href=<?php echo url()."/images//apple-icon-152x152.png"?>>
		<link rel="apple-touch-icon" sizes="180x180" href=<?php echo url()."/images//apple-icon-180x180.png"?>>
		<link rel="icon" type="image/png" sizes="192x192"  href=<?php echo url()."/images//android-icon-192x192.png"?>>
		<link rel="icon" type="image/png" sizes="32x32" href=<?php echo url()."/images//favicon-32x32.png"?>>
		<link rel="icon" type="image/png" sizes="96x96" href=<?php echo url()."/images//favicon-96x96.png"?>>
		<link rel="icon" type="image/png" sizes="16x16" href=<?php echo url()."/images//favicon-16x16.png"?>>
		<link rel="manifest" href=<?php echo url()."/images//manifest.json"?>>
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
@section('sidenav')

@parent

<div class="col-md-offset-2 col-sm-8">
	
	<div class="panel-group">
			<div class="panel panel-primary">
		      <div class="panel-heading">Subir imagen</div>
		     	 <div class="panel-body">
			    
				
				<?= Form::open(array('files' => true)) ?>
				 {!!Form::open(['route'=>'producto.store', 'method'=>'POST'])!!}
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nombre" id="nombre"
                    placeholder="Nombre Producto" />
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Precio</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="precio" id="precio"
                    placeholder="Ej.:10000" />
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Categoría</label>
                <div class="col-sm-9">
                  <select class="form-control" name="categoria">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Descripcion</label>
                <div class="col-sm-9">
                   <textarea name = "descripcion" class="form-control" rows="5" id="descripcion"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Siguiente</button>
                </div>
              </div>
				<?= Form::label('image', 'Mi Imagen') ?>
				<br>
				<?= Form::file('image') ?>
				<br>
				<?= Form::submit('Subir',['class'=>'btn btn-primary']) ?>
				<?= Form::close() ?>
				</div>
	</div>

	</div>


	
</div>
@endsection