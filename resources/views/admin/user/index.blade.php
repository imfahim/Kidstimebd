@extends('admin.main')

@section('title', 'Center')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="/admin/user/create" type="button" class="btn btn-default">Create New user</a>
			<div class="card">
				<div class="card-header" data-background-color="orange">
					<h4 class="title">User</h4>
					<p class="category">All user List</p>
				</div>
				<div class="card-content table-responsive">

					<table class="table">
						<thead class="text-primary">
							<th>User Id</th>
							<th>Username</th>
							<th>User Email</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							<td>User Id</td>
							<td>Username</td>
							<td>User Email</td>
							<td><a href="/admin/user/edit" class="btn btn-info btn-sm">Edit</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
