@extends('admin.template.main')
@section('title', 'Editar Usuario - ' . $user->name)
@section('content')

{!! Form::open(['route'=>['admin.users.update', $user],'method'=>'PUT']) !!}
	<div class="form-group">
		{!!Form::label('name','Nombre')!!}
		{!!Form::text('name', $user->name ,['class'=> 'form-control','placeholder' => 'Nombres','required'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('lastname','Apellidos')!!}
		{!!Form::text('lastname', $user->lastname ,['class'=> 'form-control','placeholder' => 'Apellidos','required'])!!}
	</div>


	<div class="form-group">
		{!!Form::label('email','Correo Electronico')!!}
		{!!Form::text('email',$user->email,['class'=> 'form-control','placeholder' => 'example@gmail.com','required'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('street','Calle:')!!}
		{!!Form::text('street',$user->street,['class'=> 'form-control','placeholder' => 'Calle','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('number','Número:')!!}
		{!!Form::text('number',$user->number,['class'=> 'form-control','placeholder' => '#','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('neighborhood','Colonia:')!!}
		{!!Form::text('neighborhood',$user->neighborhood,['class'=> 'form-control','placeholder' => 'Colonia','required'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('zipcode','Codigo Postal:')!!}
		{!!Form::text('zipcode',$user->zipcode,['class'=> 'form-control','placeholder' => 'Codigo Postal','required'])!!}
	</div>
			<div class="form-group">
		{!!Form::label('city','Ciudad/Municipio:')!!}
		{!!Form::text('city',$user->city,['class'=> 'form-control','placeholder' => 'Ciudad/Municipio','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('state','Estado:')!!}
		{!!Form::select('state',['Ags.'=>'Aguascalientes', 'B.C.'=>'Baja California', 'B.C.S.' =>'Baja California Sur','Camp.'=>'Campeche','Chis.'=>'Chiapas','Chih.'=>'Chihuahua', 'Coah.' => 'Coahuila','Col.' =>'Colima','CDMX'=>'Ciudad de méxico','Dgo.'=>'Durango','Gto.'=>'Guanajuato','Gro.' => 'Guerrero','Hgo.' => 'Hidalgo', 'Jal.' => 'Jalisco','Méx.' => 'Estado de México','Mich.' => 'Michoacán','Mor.' => 'Morelos','Nay.' => 'Nayarit','N.L.' => 'Nuevo Leon','Oax.' => 'Oaxaca','Pue.' => 'Puebla','Qro.' => 'Queretaro','Q. Roo.' => 'Quintana Roo', 'S.L.P.' => 'San Luis Potosí','Sin.' => 'Sinaloa', 'Son.' => 'Sonora','Tab.' => 'Tabasco', 'Tamps.' => 'Tamaulipas', 'Tlax.' => 'Tlaxcala','Ver.' => 'Veracruz','Yuc.' => 'Yucatán','Zac.' => 'Zacatecas']
		,$user->state,['class' => 'form-control', 'placeholder' => 'Seleccione una Ciudad...','required'])!!}
	</div>




 
	<div class="form-group">
		{!!Form::label('type','Tipo')!!}
		{!!Form::select('type',['' => 'Selecciona','member' => 'Miembro', 'admin' => 'Administrador'],$user->type,['class' => 'form-control'])!!}
	</div>
		<div class="form-group">
		{!!Form::submit('editar',['class'=>'btn btn-primary'])!!}
		 
	</div>
{!! Form::close() !!}
@endsection