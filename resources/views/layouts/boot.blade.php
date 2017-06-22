

@section('boot')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio - Compra Venta UCM</title>

    <script type="text/javascript" src="<?php echo url()."/assets/js/validator.js";?>" ></script>
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

    <!-- Bootstrap core CSS -->
    <!--<link href=<?php echo url()."/assets/vendor/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">-->
   <link href=<?php echo url()."/assets/css/bootstrap.min.css";?> rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--<link href=<?php echo url()."/assets/css/shop-homepage.css"?> rel="stylesheet">-->

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>
@show

