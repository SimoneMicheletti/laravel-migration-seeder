@extends('layouts.main-layout')

@section('content')
	<h1>OFFICES:</h1>
	<ul>
		@foreach ($offices as $office)
			<li>
				<a href="{{ route('office-show', $office -> id)}}">
					id: {{ $office -> id }} | {{ $office -> name }}
				</a>
			</li>
		@endforeach
	</ul>
@endsection