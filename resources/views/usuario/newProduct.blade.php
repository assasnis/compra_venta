@extends('layouts.sideAndnav')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nuevo Producto - Compra Venta UCM</title>

    <!-- Bootstrap -->
    <link href=<?php echo url()."/assets/css/bootstrap.min.css";?> rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
@section('sidenav')

@parent






<script type='text/javascript'>
$(window).load(function(){
    $('.input-daterange').datepicker({});
});
</script>

<body>
  <div class="container">

    <div class="row">
      <div class="col-md-5 col-sm-offset-2">
        @include('alerts.errors')
        <div class=" panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Nuevo Producto</h3>
          </div>
          <div class="panel-body">
          {!!Form::open(['route'=>'producto.store', 'method'=>'POST'],'novalidate')!!}
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
                <label for="inputPassword3" class="col-sm-3 control-label">Cantidad</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="cantidad" id="cantidad"
                    placeholder="" />
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Categoría</label>
                <div class="col-sm-9">
                  
                  <select class = "form-control" name="categoria" id="categoria" >
                    <option value="Accesorios para Vehículos">Accesorios para Vehículos</option>
                    <option value="Animales y Mascotas">Animales y Mascotas</option>
                    <option value="Arte y Antigüedades">Arte y Antigüedades</option>
                    <option value="Bebés">Bebés</option>
                    <option value="Cámaras y Accesorios">Cámaras y Accesorios</option>
                    <option value="Celulares y Telefonía">Celulares y Telefonía</option>
                    <option value="Coleccionables y Hobbies">Coleccionables y Hobbies</option>
                    <option value="Computación">Computación</option>
                    <option value="Consolas y Videojuegos">Consolas y Videojuegos</option>
                    <option value="Deportes y Fitness">Deportes y Fitness</option>
                    <option value="Electrodomésticos">Electrodomésticos</option>
                    <option value="Electrónica, Audio y Video">Electrónica, Audio y Video</option>
                    <option value="Entradas para Eventos">Entradas para Eventos</option>
                    <option value="Herramientas y Construcción">Herramientas y Construcción</option>
                    <option value="Hogar y Muebles">Hogar y Muebles</option>
                    <option value="Industrias y Oficinas">Industrias y Oficinas</option>
                    <option value="Instrumentos Musicales">Instrumentos Musicales</option>
                    <option value="Juegos y Juguetes">Juegos y Juguetes</option>
                    <option value="Libros, Revistas y Comics">Libros, Revistas y Comics</option>
                    <option value="Música y Películas">Música y Películas</option>
                    <option value="Relojes y Joyas">Relojes y Joyas</option>
                    <option value="Salud y Belleza">Salud y Belleza</option>
                    <option value="Vestuario y Calzado">Vestuario y Calzado</option>
                    <option value="Otras Categorías">Otras Categorías</option>
                  </select>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Descripcion</label>
                <div class="col-sm-9">
                   <textarea name = "descripcion" class="form-control" rows="5" id="descripcion" ></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Siguiente</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
  </div>
</body>
</html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=<?php echo url()."/assets/js/bootstrap.min.js";?>></script>

@endsection