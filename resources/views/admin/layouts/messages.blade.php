@if (Session::has('success'))
  <div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close">×</button>
    <span>
        <b><i class="material-icons">done</i>  Success - </b> {{ Session::get('success') }}</span>
  </div>
@endif

@if (Session::has('fail'))
  <div class="alert alert-danger">
    <button type="button" aria-hidden="true" class="close">×</button>
    <span>
        <b><i class="material-icons">error</i>  Failed - </b> {{ Session::get('fail') }}</span>
  </div>
@endif

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <button type="button" aria-hidden="true" class="close">×</button>
    <span>
        <b><i class="material-icons">error</i>  Failed - </b> </span>
    <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
      @endforeach
    </ul>
  </div>
@endif
