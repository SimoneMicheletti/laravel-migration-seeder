@extends('layouts.main-layout')

@section('content')
	<h1>EMPLOYEES:</h1>
	<ul>
		@foreach ($employees as $employee)
			<li>
				<a href="{{ route('employee-show', $employee -> id)}}">
					id: {{ $employee -> id }} | {{ $employee -> name }} {{ $employee -> lastname }}
				</a>
			</li>
		@endforeach
	</ul>
@endsection