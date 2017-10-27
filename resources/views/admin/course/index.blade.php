@extends('admin.main')

@section('title', 'Course')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="/admin/course/create" type="button" class="btn btn-default">Create New Course</a>
			<div class="card">
				<div class="card-header" data-background-color="orange">
					<h4 class="title">Courses</h4>
					<p class="category">All course List</p>
				</div>
				<div class="card-content table-responsive">

					<table class="table">
						<thead class="text-primary">
							<th>Course Code</th>
							<th>Title</th>
							<th>Details</th>
							<th>Fee</th>
							<th>Time</th>
							<th>Total Seats</th>
							<th>Remaining Seats</th>
							<th>Registration Deadline</th>
							<th>Starting Date</th>
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
							<td><a href="/admin/course/edit" class="btn btn-info btn-sm">Edit</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
