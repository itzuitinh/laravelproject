<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <meta name="description" content="Login" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{{ url('public/themes/images/logo.png') }}">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{{ url('public/themes/images/logo.png') }}">
  
  <!-- style -->
  <link rel="stylesheet" href="{{ url('public/themes/animate.css/animate.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('public/themes/glyphicons/glyphicons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('public/themes/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('public/themes/material-design-icons/material-design-icons.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ url('public/themes/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ url('public/themes/styles/app.css') }}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{{ url('public/themes/styles/font.css') }}" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm">
        Login
      </div>
      <form method="POST" action="{{ route('login') }}">
          @csrf
        <div class="md-form-group float-label">
          <input id="email" type="text" class="md-input {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
          @if ($errors->has('username') || $errors->has('email'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
          </span>
      @endif
          <label>Username or Email</label>
        </div>
        <div class="md-form-group float-label">
          <input id="password" type="password" class="md-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          <label>Password</label>
        </div>      
        <div class="m-b-md">        
          <label class="md-check">
             <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i class="primary"></i> Keep me signed in
          </label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
      </form>
    </div>
    <div class="p-v-lg text-center">
      <div class="m-b"><a href="{{ route('password.request') }}" class="text-primary _600">Forgot password?</a></div>
    </div>

  </div>

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="{{ url('public/themes/libs/jquery/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap -->
  <script src="{{ url('public/themes/libs/jquery/tether/dist/js/tether.min.js') }}"></script>
  <script src="{{ url('public/themes/libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- core -->
  <script src="{{ url('public/themes/libs/jquery/underscore/underscore-min.js') }}"></script>
  <script src="{{ url('public/themes/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
  <script src="{{ url('public/themes/libs/jquery/PACE/pace.min.js') }}"></script>

  <script src="{{ url('public/themes/scripts/config.lazyload.js') }}"></script>

  <script src="{{ url('public/themes/scripts/palette.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-load.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-jp.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-include.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-device.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-form.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-nav.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-screenfull.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-scroll-to.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ui-toggle-class.js') }}"></script>

  <script src="{{ url('public/themes/scripts/app.js') }}"></script>

  <!-- ajax -->
  <script src="{{ url('public/themes/libs/jquery/jquery-pjax/jquery.pjax.js') }}"></script>
  <script src="{{ url('public/themes/scripts/ajax.js') }}"></script>
<!-- endbuild -->
</body>
</html>
