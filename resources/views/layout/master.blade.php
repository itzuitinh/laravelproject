<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>@yield('title')</title>
  <meta name="description" content="tool" />
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
<!-- aside -->
<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside indigo-900 dk" layout="column">
    <div class="navbar navbar-md no-radius">
      <!-- brand -->
      <a class="navbar-brand">
          <div ui-include="'../assets/images/logo.svg'"></div>
          <img src="../assets/images/logo.png" alt="." class="hide">
          <span class="hidden-folded inline">Flatkit</span>
      </a>
      <!-- / brand -->
    </div>
    <div flex class="hide-scroll">
      <nav class="scroll nav-active-primary">
        
          <ul class="nav" ui-nav>
            <li class="nav-header hidden-folded">
              <small class="text-muted">Main</small>
            </li>
            
            <li>
              <a href="#" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe3fc;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Auditor</span>
              </a>
            </li>
            <li>
              <a href="#" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe5c3;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">NVBH</span>
              </a>
            </li>
            <li>
              <a href="#" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe8d2;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Report</span>
              </a>
            </li>
          </ul>
      </nav>
    </div>
    
  </div>
</div>
<!-- / aside -->
<div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow navbar-md">
        <div class="navbar">
          <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
            <i class="material-icons"></i>
          </a>
            <!-- navbar right -->
            <div class="navbar-item pull-left h5 ng-binding" id="pageTitle">Dashboard</div>
            <ul class="nav navbar-nav pull-right">
            <li class="nav-item dropdown">
                   <a class="nav-link clear" href="" data-toggle="dropdown"><span class="avatar w-32"><img src="{{ url('public/themes/images/a0.jpg') }}" alt="..."> <i class="on b-white bottom"></i></span></a>
                   <div class="dropdown-menu pull-right dropdown-menu-scale ng-scope">
                    <a class="dropdown-item"  href="#/app/page/profile"><span>Profile</span></a>
                    <a class="dropdown-item"  href="#/app/page/setting"><span>Settings</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                   
                   </div>
                </li>
                <li class="nav-item hidden-md-up"><a class="nav-link" data-toggle="collapse" data-target="#collapse"><i class="material-icons"></i></a></li>
             </ul>
            <!-- / navbar right -->
        
            <!-- navbar collapse -->
            
        </div>
    </div>
@yield('content')

<!-- ############ LAYOUT END-->

  </div>

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
