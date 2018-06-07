<html>

<h1> Create User</h1>

@if(count($errors) > 0 )
<ul>
@foreach($errors->all() as $err)
<li> {{$err}} </li>
@endforeach
</ul>
@endif

@if(Session::has('success'))
    <div>{{ Session::get('success') }}</div>
@endif

<form action = "/user/add" method = "POST">
	 {{ csrf_field() }}
	<label> Name</label>
	<input name = "name" value = "{{old('email')}}"> </input>

	<label> Email </label>
	<input name = "email" value = "{{old('email')}}"> </input>
	
	<label> Password </label>
	<input name = "password" value = "{{old('email')}}"> </input>
	<button> save </button>
</form>

</html>