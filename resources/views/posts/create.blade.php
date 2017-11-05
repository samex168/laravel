<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1>Create</h1>
						<hr>
						@if ($errors->any())
						<div class="alert alert-daner alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
							@foreach($errors->all() as $error)
								<strong>{{ $error }}</strong>
							@endforeach
						</div>
						@endif
						<form action="/posts" method="POST">
						{{ csrf_field() }}
						  name:<br>
						  <input type="text" name="name" value="name"><br>
						  email:<br>
						  <input type="text" name="email" value="email"><br>
						  text:<br>
						  <input type="text" name="text" value="text"><br>
						  desc:<br>
						  <input type="text" name="desc" value="desc"><br>
						  <br>
						  <input type="submit" value="Submit">
						</form>
					</div>
				</div>
            </div>
        </div>
    </body>
</html>
{{-- 
@extends('layouts.master')

@section('title', 'posts index')

@section('content')
    <h1>Index</h1>
@stop
--}}