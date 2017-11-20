@extends('admin.main')

@section('title', 'Enrollment')
@section('page-styles')
	<!-- DataTables -->
	<link href="{{ asset('css/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection


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
					@if ($enrolls)

					<table id="datatable-all" class="table" data-form="deleteForm">
						<thead class="text-primary">
							<th>Enrollment Code</th>
							<th>Course Code</th>
							<th>Child Name</th>
							<th>Mother Name</th>
							<th>Father Name</th>
							<th>Age</th>
							<th>Contact No</th>
							<th>Address</th>
							<th>Email</th>
							<th>Transaction No</th>
							<th>Status</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($enrolls as $enroll)
							<tr>
							<td>{{$enroll->enrollment_id}}</td>
							<td>{{$enroll->course_id}}</td>
							<td>{{$enroll->child_name}}</td>
							<td>{{$enroll->mother_name}}</td>
							<td>{{$enroll->father_name}}</td>
							<td>{{$enroll->age}}</td>
							<td>{{$enroll->contact_no}}</td>
							<td>{{$enroll->address}}</td>
							<td>{{$enroll->email}}</td>
							<td>{{$enroll->transaction_no}}</td>
							<td>{{ ($enroll->status) ? 'Enabled' : 'Disabled' }}</td>
							<td><a href="/admin/enrollment/edit" class="btn btn-info btn-sm">Edit</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
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
