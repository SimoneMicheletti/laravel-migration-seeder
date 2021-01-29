@extends('layouts.main-layout')

@section('content')
	<h1>BRANDS:</h1>
	<ul>
		@foreach ($brands as $brand)
			<li>
				<a href="{{ route('brand-show', $brand -> id)}}">
					id: {{ $brand -> id }} | {{ $brand -> name }}
				</a>
			</li>
		@endforeach
	</ul>
@endsection