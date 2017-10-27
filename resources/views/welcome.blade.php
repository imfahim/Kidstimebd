<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>


<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />

</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="example@email.com" required>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif

      </div>

      <div class="form-group">

              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

      </div>
      <button type="submit">Register</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>



    <form class="login-form" method="POST" action="{{ route('login') }}">
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
      <div class="form-group">
      <div class="row">
          <label class="col-sm-6">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
          </label>
          <div class="col-sm-6">Remember Me</div>
      </div>
      </div>
      <button type="submit">Login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="{{URL::asset('assets/js/index.js')}}"></script>

</body>
</html>
