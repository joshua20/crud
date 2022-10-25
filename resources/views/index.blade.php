@extends('layout.master')
@section('content')

<div>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Gender</th>
				<th>Qualifications</th>

			</tr>
		</thead>	
			@foreach($cruds as $crud)
			<tr>
				
					<td>{{$crud->id}}</td>
					<td>{{$crud->firstname}}</td>
					<td>{{$crud->lastname}}</td>
					<td>{{$crud->gender}}</td>
					<td>{{$crud->qualifications}}</td>
				

				<td>
					<form method="post" action="edit/{{$crud->id}}">
						@csrf
						<button type="submit" class="btn btn-primary">Edit</button>
					</form>
				</td>
				<td>
					<form method="get" action="/delete">
						@csrf
						<button type="submit" class="btn btn-primary">Delete</button>
					</form>
				</td>

			</tr>
			@endforeach

		
	</table>
</div>