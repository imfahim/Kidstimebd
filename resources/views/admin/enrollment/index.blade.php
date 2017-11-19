@extends('admin.main')

@section('title', 'Center')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="/admin/enrollment/create" type="button" class="btn btn-default">Create New Enrollment</a>
			<div class="card">
				<div class="card-header" data-background-color="orange">
					<h4 class="title">Enrollments</h4>
					<p class="category">All enrollment List</p>
				</div>
				<div class="card-content table-responsive">

					<table class="table table table-striped">
						<thead class="text-primary">
							<th>Enrollment Code</th>
							<th>Course Code</th>
							<th>Child Name</th>
							<th>Mother Name</th>
							<th>Father Name</th>
							<th>DoB</th>
							<th>Contact No</th>
							<th>Address</th>
							<th>Email</th>
							<th>Transaction No</th>
							<th>Status</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>

							<td>Curse Code</td>
							<td>Title</td>
							<td>Details</td>
							<td>Fee</td>
							<td>Time</td>
							<td>Total Seats</td>
							<td>Remaining Seats</td>
							<td>Registration Deadline</td>
							<td>Starting Date</td>
							<td>Status</td>
							<td>Status</td>
							<td><a href="/admin/enrollment/edit" class="btn btn-info btn-sm">Edit</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
