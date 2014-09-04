@extends('layouts.master')

@section('content')
	<div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <h1>Invio mail con allegato pdf</h1>
			</div>
	</div>
	<div class="container">
	</div>
	<div class="container col-lg-4">
			{{ Form::open(array('url' => 'invia')) }}
			<div class="form-group">
				{{ Form::label('lbldestinatario', 'Destinatario') }}
				{{ Form::text('destinatario','email@email.com', array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('lbloggetto', 'Oggetto') }}
				{{ Form::text('oggetto','email@email.com', array('class' => 'form-control')) }} 
			</div>
			<div class="form-group">
				{{ Form::label('lblfile', 'File') }}
				{{ Form::file('pdf') }} 
			</div>
			<div class="form-group">
				{{ Form::submit('Inviaa') }}
			</div>
			{{ Form::close() }}
			<br/>
				<p>{{ Session::get('esito') }}...</p>
</div>

@stop