@extends('layout.master')
@section('content')

<form method="post" action="/update">
	@method('PATCH')
	@csrf
	<div class="form-group">
		<label for="firstname">Firstname</label><br>
		<input type="text" name="firstname" value="{{$crud->firstname}}">
		<br>
	</div>
	<div class="form-group">
		<label for="lastname">Lastname</label><br>
		<input type="text" name="Lastname" value="{{$crud->lastname}}"><br>

	</div>
	<div>
		<label>gender</label><br>
		<input type="text" name="gender" value="{{$crud->gender}}"><br>
	</div>
	<div class="form-group">
		<label>qualification</label><br>
		<input type="text" name="qualifications" value="{{$crud->qualifications}}">
	</div>
	<div>
		<button type="button" class="btn btn-primary">update</button>
	</div>
</form>

@endsection