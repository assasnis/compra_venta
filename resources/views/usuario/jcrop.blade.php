@extends('layouts.sideAndnav')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Agregar Imagen - Compra Venta UCM</title>

    <meta charset="utf-8">
    <link rel="stylesheet" href=<?php echo url()."/assets/css/jquery.Jcrop.min.css"?> />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src=<?php echo url()."/assets/js/jquery.Jcrop.min.js"?>></script>

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

<html>
    
        
        
    
    <body>
        
        <div class="col-md-offset-2 col-sm-8">
    
        <div class="panel-group">
                <div class="panel panel-primary">
                  <div class="panel-heading">Subir imagen</div>
                     <div class="panel-body">
        <img src="<?php echo $image ?>" id="cropimage" style="width:400px;">

        <?= Form::open(['onsubmit'=>'return checkCoords();']) ?>
        <?= Form::hidden('image', $image) ?>
        <?= Form::hidden('x', '', array('id' => 'x')) ?>
        <?= Form::hidden('y', '', array('id' => 'y')) ?>
        <?= Form::hidden('w', '', array('id' => 'w')) ?>
        <?= Form::hidden('h', '', array('id' => 'h')) ?>
        <?= Form::submit('Recortar') ?>
        <?= Form::close() ?>

    </div>

    </div>


    
</div>

        <script type="text/javascript">
            $(function() {
                $('#cropimage').Jcrop({
                    aspectRatio: 1,
                    onSelect: updateCoords
                });
            });
            function updateCoords(c) {
                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            };

            function checkCoords()
            {
                if (parseInt($('#w').val()))
                     return true;
                     alert('Please select a crop region then press submit.');
                     return false;
            };
        </script>
    </body>
</html>
@endsection