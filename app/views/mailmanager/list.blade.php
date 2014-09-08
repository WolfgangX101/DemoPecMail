@extends('layouts.master')

@section('content')
<div class="container theme-showcase" role="main">
	<div class="jumbotron">
		<h1>Lista Mail</h1>
	</div>
</div>
<div class="container col-lg-8">
	<table class="table table-research">
		<thead>
			<tr>
				<th>Id</th>
				<th>To</th>
				<th>Object</th>
				<th>Text</th>
				<th>Data Send</th>
				<th>Sended</th>
				<th>Recived</th>				
			</tr>
		</thead>
		<tbody>
			@foreach ($allmail as $allmail)
			<tr>
				<td>{{ $allmail['id_mail'] }}</td>
				<td>{{ $allmail['to'] }}</td>
				<td>{{ $allmail['object'] }}</td>
				<td>{{ $allmail['text'] }}</td>
				<td>{{ $allmail['created_at'] }}</td>
				@if ($allmail['send']==0)
					<td>NO</td>
				@else
					<td>YES</td>
				@endif
				@if ($allmail['recived']==0)
					<td>NO</td>
				@else
					<td>YES</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop