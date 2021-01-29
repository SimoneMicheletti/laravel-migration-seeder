@extends('layouts.main-layout')

@section('content')

	<h1>id: {{ $employee -> id }}</h1>
	<h1>name: {{ $employee -> name }}</h1>
	<h1>lastname: {{ $employee -> lastname }}</h1>
	<h1>hiringDate: {{ $employee -> hiring_date}}</h1>
	
@endsection