@extends('layouts.sidebar')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="center/create" type="button" class="btn btn-default">Create New Center</a>
			<div class="card">
				<div class="card-header" data-background-color="orange">
					<h4 class="title">Centers</h4>
					<p class="category">All center List</p>
				</div>
				<div class="card-content table-responsive">
					<table class="table">
						<thead class="text-primary">
							<th>Name</th>
							<th>Location</th>
							<th>Detail Address</th>
							<th>Office Manager</th>
							<th>Office Contact</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							<tr>
								<td>Dakota Rice</td>
								<td>Niger</td>
								<td>Oud-Turnhout</td>
								<td>Md Manager</td>
								<td>$36,738</td>
								<td><a href="center/edit" class="btn btn-info btn-sm">Edit</a></td>
								<td><a href="center/delete" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
