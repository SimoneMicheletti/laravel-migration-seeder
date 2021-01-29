@extends('layouts.main-layout')

@section('content')

	<h1>id: {{ $office -> id }}</h1>
	<h1>office name: {{ $office -> name }}</h1>
	<h1>address: {{ $office -> address }}</h1>
	<h1>number employees: {{ $office -> number_employees}}</h1>
	
@endsection