<form method="POST" action="{{ route('course.store') }}">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary pull-right">Create</button>
</form>
<br />
<br />
<br />

{{ $id }}
