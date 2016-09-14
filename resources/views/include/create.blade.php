@extends('layout.dafault')
@section('content')
<div class ="container">
<div class ="row">
<div class ="col-xs-6">
<h3>CREATE</h3>
{!! Form::open(['route'=>'home.store'])  !!}
<div class="form-group">
    {!! Form::label('Your NRP') !!}
	 {!! Form::text('nim', null,array('class'=>'form-control','placeholder'=>'Your NRP')) !!}
</div>
  <div class="form-group">
    {!! Form::label('Your Name') !!}
	{!! Form::text('nama', null,array('class'=>'form-control','placeholder'=>'Your name')) !!}
</div>
    <div class="form-group">
    {!! Form::label('Your Class') !!}
	{!! Form::text('kelas', null,array('class'=>'form-control','placeholder'=>'Your Class')) !!}
	</div>
	 <div class="form-group">
	{!! Form::label('Your email') !!}
	{!! Form::text('email', null,array('class'=>'form-control','placeholder'=>'Your email')) !!}
	</div>
	<div class="form-group">
        {!! Form::submit('Register',
        array('class'=>'btn btn-primary')) !!}
    </div>
	</div>
	</div>
	</div>
{!! Form::close() !!}
@endsection