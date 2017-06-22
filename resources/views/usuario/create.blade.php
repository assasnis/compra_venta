{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('rut','Rut:')!!}
		{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingresa el rut del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('apellido','apellido:')!!}
		{!!Form::text('surname',null,['class'=>'form-control','placeholder'=>'Ingresa el apellido del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	