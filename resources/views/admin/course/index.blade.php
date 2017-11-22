@extends('admin.main')

@section('title', 'Courses')

@section('page-styles')
	<!-- DataTables -->
	<link href="{{ asset('css/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('course.create')}}" type="button" class="btn btn-default">Create New Course</a>
			<div class="card">
				<div class="card-header" data-background-color="orange">
					<h4 class="title">Courses</h4>
					<p class="category">All course List</p>
				</div>
				<div class="card-content table-responsive">
					@if ($courses)
					<table id="datatable-all" class="table table-striped" data-form="deleteForm">
						<thead class="text-primary">
							<th>Course Code</th>
							<th>Title</th>
							<th>Details</th>
							<th>Fee</th>
							<th>Period</th>
							<th>Total Seats</th>
							<th>Remaining Seats</th>
							<th>Registration Deadline</th>
							<th>Starting Date</th>
							<th>Status</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($courses as $course)
							<tr>
								<td>{{ $course->course_id }}</td>
								<td>{{ $course->title}}</td>
								<td>{{ $course->details}}</td>
								<td>Tk. {{ $course->fee}}</td>
								<td>
									<small>Starting Time : {{ json_decode($course->time)->start_time }}</small><br />
									<small>Ending Time : {{ json_decode($course->time)->end_time }}</small><br />
									<small>Days :
									@foreach (json_decode($course->time)->days as $day)
										<li>{{ $day }}</li>
									@endforeach
									</small>
								</td>
								<td>{{ $course->total_seats}}</td>
								<td>{{ $course->remaining_seats}}</td>
								<td>{{ \Carbon\Carbon::parse($course->registration_deadline)->format('d/m/Y')}}</td>
								<td>{{ \Carbon\Carbon::parse($course->starting_date)->format('d/m/Y')}}</td>
								<td>{{ ($course->status) ? 'Enabled' : 'Disabled' }}</td>
								<td><a href="{{ route('course.edit', [$course->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
								<td>
									<form class="form-delete" method="POST" action="{{ route('course.destroy', [$course->id]) }}">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="delete" />
										<input type="hidden" name="id" value="{{ $course->id }}" />
										<input type="submit" class="btn btn-danger btn-xs" value="Delete"/>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@else
						<h5>No Item's yet, Please add a Course.</h5>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Confirmation Modal Box -->
@include('admin.layouts.modal')

@endsection

@section('page-scripts')
	<!-- DataTables -->
	<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/datatable/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>

	<!-- page script -->
	<script>
	  $(function () {
	    $('#datatable-all').DataTable()
	  })
	</script>

	<script>
	// For Deletion Confirmation Modal
	$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
	    e.preventDefault();
	    var $form=$(this);
	    $('#confirm').modal({ backdrop: 'static', keyboard: false })
	        .on('click', '#delete-btn', function(){
	            $form.submit();
	        });
	});
	</script>
@endsection
