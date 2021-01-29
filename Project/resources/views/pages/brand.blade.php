@extends('layouts.main-layout')

@section('content')

	<h1>id: {{ $brand -> id }}</h1>
	<h1>brand name: {{ $brand -> name }}</h1>
	<h1>logo-url: {{ $brand -> logo }}</h1>
	<h1>number offices: {{ $brand -> number_offices }}</h1>
	
@endsection