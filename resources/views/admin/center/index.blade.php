@extends('admin.main')

@section('title', 'Center')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('center.create') }}" type="button" class="btn btn-default">Create New Center</a>
			<div class="card">
				<div class="card-header" data-background-color="orange">
					<h4 class="title">Centers</h4>
					<p class="category">All center List</p>
				</div>
				<div class="card-content table-responsive">
					@if ($centers)
					<table class="table">
						<thead class="text-primary">
							<th>Center Code</th>
							<th>Name</th>
							<th>Location</th>
							<th>Detail Address</th>
							<th>Office Manager</th>
							<th>Office Contact</th>
							<th>Office Email</th>
							<th>Status</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($centers as $center)
								<tr>
									<td>{{ $center->center_id }}</td>
									<td>{{ $center->name }}</td>
									<td>{{ $center->location_heading }}</td>
									<td>{{ $center->address }}</td>
									<td>{{ $center->office_manager }}</td>
									<td>{{ $center->office_contact_no }}</td>
									<td>{{ $center->office_email }}</td>
									<td>{{ ($center->status) ? 'Enabled' : 'Disabled' }}</td>
									<td><a href="{{ route('center.edit', [$center->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
									<td>
										<form method="POST" action="{{ route('center.destroy', [$center->id]) }}">
											{{ csrf_field() }}
											<input type="hidden" name="_method" value="delete" />
											<input type="hidden" name="id" value="{{ $center->id }}" />
											<input type="submit" class="btn btn-danger btn-xs" value="Delete"/>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					@else
						<h5>No Item's yet, Please add a Center.</h5>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
