@extends('admin.template.main')
@section('title', 'Crear Usuario')
@section('content')

	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
		@foreach($errors-> all() as $error)
			<li>{{ $error }}</li>
		@endforeach
			</ul>
		</div>
	@endif
	 
{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}
	<div class="form-group">
		{!!Form::label('name','Nombres:')!!}
		{!!Form::text('name',null,['class'=> 'form-control','placeholder' => 'Nombres','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('lastname','Apellidos:')!!}
		{!!Form::text('lastname',null,['class'=> 'form-control','placeholder' => 'Apellidos','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo Electronico:')!!}
		{!!Form::text('email',null,['class'=> 'form-control','placeholder' => 'example@gmail.com','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password' ,['class'=> 'form-control','placeholder' => '********','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('street','Calle:')!!}
		{!!Form::text('street',null,['class'=> 'form-control','placeholder' => 'Calle','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('number','Número:')!!}
		{!!Form::text('number',null,['class'=> 'form-control','placeholder' => '#','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('neighborhood','Colonia:')!!}
		{!!Form::text('neighborhood',null,['class'=> 'form-control','placeholder' => 'Colonia','required'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('zipcode','Codigo Postal:')!!}
		{!!Form::text('zipcode',null,['class'=> 'form-control','placeholder' => 'Codigo Postal','required'])!!}
	</div>
			<div class="form-group">
		{!!Form::label('city','Ciudad/Municipio:')!!}
		{!!Form::text('city',null,['class'=> 'form-control','placeholder' => 'Ciudad/Municipio','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('state','Estado:')!!}
		{!!Form::select('state',['Ags.'=>'Aguascalientes', 'B.C.'=>'Baja California', 'B.C.S.' =>'Baja California Sur','Camp.'=>'Campeche','Chis.'=>'Chiapas','Chih.'=>'Chihuahua', 'Coah.' => 'Coahuila','Col.' =>'Colima','CDMX'=>'Ciudad de méxico','Dgo.'=>'Durango','Gto.'=>'Guanajuato','Gro.' => 'Guerrero','Hgo.' => 'Hidalgo', 'Jal.' => 'Jalisco','Méx.' => 'Estado de México','Mich.' => 'Michoacán','Mor.' => 'Morelos','Nay.' => 'Nayarit','N.L.' => 'Nuevo Leon','Oax.' => 'Oaxaca','Pue.' => 'Puebla','Qro.' => 'Queretaro','Q. Roo.' => 'Quintana Roo', 'S.L.P.' => 'San Luis Potosí','Sin.' => 'Sinaloa', 'Son.' => 'Sonora','Tab.' => 'Tabasco', 'Tamps.' => 'Tamaulipas', 'Tlax.' => 'Tlaxcala','Ver.' => 'Veracruz','Yuc.' => 'Yucatán','Zac.' => 'Zacatecas']
		,null,['class' => 'form-control', 'placeholder' => 'Seleccione una Ciudad...','required'])!!}
	</div>
 
		<div class="form-group">
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		 
	</div>
{!! Form::close() !!}
@endsection

