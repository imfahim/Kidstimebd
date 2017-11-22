<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>


<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
<!-- Bootstrap core CSS     -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="{{ route('login') }}" style="text-align: left;">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="example@email.com" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

              <input id="password" type="password" class="form-control" name="password" placeholer="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif

      </div>
      <div style="margin-left: -45px;">
        <div class="col-sm-offset-1">
          <div class="checkbox">
            <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
          </div>
        </div>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
