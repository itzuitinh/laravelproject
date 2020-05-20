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
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b">
        Forgot your password?
        <p class="text-xs m-t">Enter your email address below and we will send you instructions on how to change your password.</p>
      </div>
      <form method="POST" action="{{ route('password.email') }}">
             @csrf
        <div class="md-form-group">
          <input id="email" type="email" class="md-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <label>Your Email</label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Send</button>
      </form>
    </div>
    <p id="alerts-container"></p>
    <div class="p-v-lg text-center">Return to <a href="{{ route('login') }}" class="text-primary _600">Sign in</a></div>    
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
