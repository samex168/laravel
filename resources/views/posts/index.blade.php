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
                <div>
                    <a href="{{ route('posts.create') }}">Create</a>
                </div>
				<div>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Success:</strong> {{ Session::get('success') }}
                        </div>
                    @endif
                    <table>
                    <th>id</th><th>name</th><th>email</th><th colspan="2"></th>
					@foreach($posts as $post)
                        <tr>
                        <td>{{ $post->id }}</td>
						<td>{{ $post->name }}</td>
						<td>{{ $post->email }}</td>
                        <td><a href="{{ route('posts.edit', $post->id) }}">Edit</a></td>
                        <td><form action="{{ route('posts.destroy', $post->id) }}" method="POST">{{ csrf_field() }} {{ method_field('DELETE') }}<input type="submit" value="Delete" class="btn btn-danger btn-block"></form></td>
                        </tr>
					@endforeach
                    </table>
                    {!! $posts->links(); !!}
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