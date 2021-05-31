@extends('layouts.app')

@section('content')
 	<div class="jumbatron jumbatron-fluid">
 		<div class="container">
 			<h1 class="display-4">RICKY HOME</h1>
 			<p class="lead">THIS IS THE HOME PAGE</p>
 		</div>
 		<p>Nama : {{ $nama }}</p>
 		<p>Mata Pelajaran</p>
 		<ul>
 			@foreach($pelajaran as $p)
 			<li>{{ $p }}</li>
 			@endforeach
 	</div>
@endsection