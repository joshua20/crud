@extends('layout.master')
@section('content')

<form method="post" action="/insert">
	@csrf

	<div class="form-group">
		<label for="firstname">first name</label><br>
		<input type="text" name="firstname"><br>
	</div>
	<div class="form-group">
		<label for="lastname">lastname</label><br>
		<input type="text" name="lastname"><br>

	</div>
	<div class="form-group">
		<label for="gender">Gender</label><br>
		<input type="text" name="gender"><br>
	</div>
	<div class="form-group">
		<label for="qualifications">
			Qualifications
		</label><br>
		<input type="text" name="qualifications"><br>
	</div>
	<button type="submit" class="btn btn-primary">Insert</button>
</form>


@endsection