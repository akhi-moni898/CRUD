<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<table class="table table-border">

	<h1>Contacts Details </h1>
	<a href="{{URL::to('/')}}" class="btn btn-success">Home</a><br>
	<a href="{{URL::to('/insert-data')}}" class="btn btn-primary">Add Contact</a>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>email</th>
		<th>phone</th>
		<th>Description</th>
		<th>Action</th>
	</tr>
	@foreach($data as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>{{ $row->name }}</td>
		<td>{{ $row->email }}</td>
		<td>{{ $row->phone }}</td>
		<td>{{ $row->description }}</td>
		<td>
			<a href="{{URL::to('edit-contact/'.$row->id)}}" class="btn btn-info">edit</a>
			<a href="{{URL::to('delete-contact/'.$row->id)}}" class="btn btn-danger">delete</a>
			<a href="{{URL::to('view-contact/'.$row->id)}}" class="btn btn-secondary">View</a>
		</td>
	</tr>
	@endforeach
</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>