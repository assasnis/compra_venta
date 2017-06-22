<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Inicio - Compra y venta UCM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">


        @CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
    color: #333;
} 

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		


		&:focus {
		  z-index: 2;
		}
	}

body {
	background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #5d5d5d;
	background: #f2f2f2;
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
		text-align: center;
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
       @include('alerts.errors')

        {!! Form::open(['route'=>'log.store','method '=>'POST','role'=>'login','name'=>'form1'])!!}
        {!!Form::token()!!}
            <img src="<?php echo url()."/images/logo_ucm.png"?>" class="img-responsive" alt="" />
            
            <div class="form-gruop">
                {!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingrese su rut','required'])!!}
            </div>

            <div class="form-gruop">
               {!!Form::password('password',['class'=>'form-control input-lg','placeholder'=>'Ingrese contraseña','required'])!!}
            </div>

            <div class="pwstrength_viewport_progress"></div>
            
            {!!Form::submit('Iniciar Sesión',['class'=>'btn btn-lg btn-primary btn-block'])!!}

        {!! Form::close() !!}


      
         
        
        <div class="form-links">
          <a href="www.ucm.cl">www.ucm.cl</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
  <p>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank"><small></small><sup></sup></a>
    <br>
    <br>
    
  </p>     
  
  
</div>
</body>
</html>
