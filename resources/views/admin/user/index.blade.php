@extends('admin.main')

@section('title', 'Admins')

@section('page-styles')
	<!-- DataTables -->
	<link href="{{ asset('css/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('admin.create') }}" type="button" class="btn btn-default">Create New Admin</a>
			<div class="card">
				<div class="card-header" data-background-color="orange">
					<h4 class="title">Admin</h4>
					<p class="category">All Admin List</p>
				</div>
				<div class="card-content table-responsive">
				@if ($admins)
				<table id="datatable-all" class="table" data-form="deleteForm">
					<thead class="text-primary">
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($admins as $admin)
								<tr>
									<td>{{ $admin->id }}</td>
									<td>{{ $admin->name }}</td>
									<td>{{ $admin->email}}</td>
									<td><a href="{{ route('admin.edit', [$admin->id]) }}" class="btn btn-info btn-sm">Set Password</a></td>
									<td>
										<form class="form-delete" method="POST" action="{{ route('admin.destroy', [$admin->id]) }}">
											{{ csrf_field() }}
											<input type="hidden" name="_method" value="delete" />
											<input type="hidden" name="id" value="{{ $admin->id }}" />
											<input type="submit" class="btn btn-danger btn-xs" role="button" value="Delete"/>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

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
