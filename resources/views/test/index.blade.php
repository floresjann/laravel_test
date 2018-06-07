@extends('layout.template')

@section('content')

	<h1> Hello World!</h1>
	<table class = "table">
	@foreach($users as $user)
       <tr>
            <td>{{$user->name}}</td> 
            <td>{{$user->email}}</td> 
            <td><a href = "user/{{id}}/edit" > Edit </a></td>
        </tr>
    @endforeach
    </table>
@endsection