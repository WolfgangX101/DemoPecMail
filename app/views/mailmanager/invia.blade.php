@extends('layouts.master')

@section('content')
	<div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <h1>Creazione Mail da inviare</h1>
			</div>
	</div>
	<div class="container col-lg-4">
			{{ Form::open(array('url' => 'preparazione')) }}
			<div class="form-group">
				{{ Form::label('lbldestinatario', 'Destinatario') }}
				{{ Form::text('to',Input::old('to'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('lbloggetto', 'Oggetto') }}
				{{ Form::text('object',Input::old('object'), array('class' => 'form-control')) }} 
			</div>
			<div class="form-group">
				{{ Form::label('lbltext', 'Testo') }}
				{{ Form::text('text',Input::old('text'), array('class' => 'form-control')) }} 
			</div>
			<!--<div class="form-group">
				{{ Form::label('lblfile', 'File') }}
				{{ Form::file('pdf') }} 
			</div>-->
			<div class="form-group">
				{{ Form::submit('Invia') }}
			</div>
			{{ Form::close() }}
	</div>
	<div class="container col-lg-4">
		@if (Session::get('esito')=='Inviato')
			<div class="alert alert-success" role="alert">Mail Aggiunta alla Lista</div>
		@elseif (Session::get('esito')=='Non Inviato')
			<div class="alert alert-danger" role="alert">Mail non Aggiunta alla Lista</div>
			@foreach ($errors->all() as $errors)
				<div class="alert alert-warning" role="alert">{{ $errors }}</div>
			@endforeach
		@endif
	</div>

@stop