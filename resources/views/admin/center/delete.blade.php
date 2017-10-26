@extends('layouts.sidebar')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <a href="center/index" class="btn">Back</a>
      <div class="card">
				<div class="card-header" data-background-color="orange">
          <h4 class="title">Delete Confirmation</h4>
	      </div>

    <div class="card-content table-responsive">
      <table class="table">
		<tr>
			<td>Center Name</td>
			<td></td>
		</tr>
		<tr>
			<td>Location</td>
			<td></td>
		</tr>
		<tr>
			<td>Address</td>
			<td></td>
		</tr>
	</table>
</div>
</div>
<div class="card">
  <div class="card-header" data-background-color="red">
    <h4 class="title">Are you sure? This cannot be undone.</h4>
  </div>
	<h2></h2>
	<form method="post">
		<!--{{csrf_field()}}-->
		<input type="hidden" name="centerId" value="">
		<input type="submit" class="btn btn-primary col-md-12" value="Confirm">
	</form>
</div>
</body>
</html>
@endsection
