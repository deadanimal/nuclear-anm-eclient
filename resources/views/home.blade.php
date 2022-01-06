<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
    {{-- {{ asset('') }} --}}

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    

    <style>
      body {font-family: Arial;}
      
      /* Style the tab */
      .tab {
        overflow: hidden;
        /* border: 1px solid #ccc; */
        /* background-color: #f1f1f1; */
      }
      
      /* Style the buttons inside the tab */
      .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
      }
      
      /* Change background color of buttons on hover */
      .tab button:hover {
        background-color: #C4C4C4;
      }
      
      /* Create an active/current tablink class */
      .tab button.active {
        background-color: #2CABE1;
      }
      
      /* Style the tab content */
      .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
      }
      </style>
    <style>
    # , #button2 {
      display:inline-block;
      background-color: hsl(198, 75%, 53%);
      border: #000000
      color: #FFFFFF;
      /* additional code */
    }
    </style>
    <style>
      .solidline {
       border-top: 3px solid #2CABE1;
      }
      .box {
   display: flex;
   align-items:center;
  }
  form.label{}
  form.input{
    height: 100%;
    width: 100%;
  }
    </style>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      {{-- <div class="banner" >
        <div class="banner__content">
          <div class="banner__text">
            <img src="{{ asset('Header.png') }}" alt="">
          </div>
        </div>
      </div> --}}
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            {{-- <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div> --}}
            <a class="navbar-brand" href="index.html">
              <div class="d-flex align-items-center "><img class="me-2" src="{{ asset('Header.png') }}" alt="" width="1600" /><span class="font-sans-serif"></span>
              </div>
            </a>
          </div>
          <div class=" navbar-collapse" id="navbarVerticalCollapse" style="background-color: white">
            <div class="navbar-vertical-content scrollbar">
                <div class="toggle-icon-wrapper">

              {{-- <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> --}}

            </div>
            <ul class="align-items-center navbar-nav flex-column box" id="navbarVerticalNav">
              <a class="nav-link active" href="index.html" style="center-align">
              <img src="{{ asset('/home.png') }}">

                  UTAMA
              </a>
              
          </ul>
          <hr class="solidline">
          <ul class="align-items-center navbar-nav flex-column box" id="navbarVerticalNav">
            <img src="{{ asset('/menu.png') }}">
              <a class="nav-link active" href="/dashboard" style="center-align;">
                  MENU
              </a>
              
          </ul>
          <hr class="solidline">
          <ul class="align-items-center navbar-nav flex-column box" id="navbarVerticalNav">
            <img src="{{ asset('/latihan.png') }}">
              <a class="nav-link active" href="index.html" style="center-align">
                  PERMOHONAN  LATIHAN
              </a>
              
          </ul>
          <hr class="solidline">
          <ul class="align-items-center navbar-nav flex-column box" id="navbarVerticalNav" data-bs-toggle="modal" data-bs-target="#loginModal">
            <img src="{{ asset('/login.png') }}">
              <a class="nav-link active" href="" style="center-align" >
                  LOGIN
              </a>
          </ul>
          <hr class="solidline">
          <li class="">
            <ul><a href="/spp_profil_syarikat">spp_profil_syarikat</a></ul>
            <ul><a href="/spp_profil_harga_servis">spp_profil_harga_servis</a></ul>
            <ul><a href="/spp_pusat_khidmat">spp_pusat_khidmat</a></ul>
            <ul><a href="/spp_pusat_khidmat_servis">spp_pusat_khidmat_servis</a></ul>
            <ul><a href="/kod_bank">kod_bank</a></ul>
            <ul><a href="/kod_bayaran">kod_bayaran</a></ul>
            <ul><a href="/kod_negeri">kod_negeri</a></ul>
            <ul><a href="/kod_daerah">kod_daerah</a></ul>
          </li>
        </div>
      </div>
    </nav>
  </div>
        <!-- Modal Login -->
  <div class="modal fade;" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true" style="widows: 10px;">
    <div class="modal-dialog modal-dialog-centered" role="document">
      
      <div class="modal-content">
        <div class="tab" style="max-width: 500px">
          <button class="tablinks inline-block" id="defaultOpen" onclick="openCity(event, 'LogMasukKakitangan')">Kakitangan</button>
          <button class="tablinks inline-block" id="" onclick="openCity(event, 'LogMasukPelanggan')">Pelanggan</button>
          <button type="button" class="close topleft" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div id="LogMasukKakitangan" class="tabcontent" id="">
            <h3 style="color:white">Log Masuk Kakitangan</h3>
            <div class="modal-header">
              <h5 class="modal-title" id="" style="align-center">Log Masuk Kakitangan</h5>
  
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
                  <label>Email</label><br>
    
                    <label for="email" :value="__('Email')" />
    
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                  <label>Password</label><br>
                    <label for="password" :value="__('Password')" />
    
                    <input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
    
                <!-- Remember Me -->
                <div style="" class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <br>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary"> {{ __('Log in') }}</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
          <div id="LogMasukPelanggan" class="tabcontent">
            <h3 style="color:white">Log Masuk Pelanggan</h3>
            <div class="modal-header">
              <h5 class="modal-title" id="" style="align-center">Log Masuk Pelanggan</h5>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
                  <label>Email</label><br>
    
                    <label for="email" :value="__('Email')" />
    
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                  <label>Password</label><br>
                    <label for="password" :value="__('Password')" />
    
                    <input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
    
                <!-- Remember Me -->
                <div style="" class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <br>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary"> {{ __('Log in') }}</button>
                    </div>
                </div>
              </form>
            </div>
    

          </div>
        </div>

      </div>
    </div>
  </div>
 
  <div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
      <div class="card mb-3 mb-lg-0">
        {{-- <div class="card-body">
        </div> --}}
      </div>
    </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    {{-- <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content border-0 vh-100 scrollbar-overlay">
          <div class="modal-header modal-header-settings bg-shape">
            <div class="z-index-1 py-1 light">
              <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
              <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
            </div>
            <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-card" id="themeController">
            <h5 class="fs-0">Color Scheme</h5>
            <p class="fs--1">Choose the perfect color mode for your app.</p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{ asset('assets/img/generic/falcon-mode-default.jpg') }}" alt=""/></span><span class="label-text">Light</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{ asset('assets/img/generic/falcon-mode-dark.jpg') }}" alt=""/></span><span class="label-text"> Dark</span></label>
                </div>
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="{{ asset('assets/img/icons/left-arrow-from-left.svg') }}" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">RTL Mode</h5>
                  <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="documentation/customization/configuration.html">RTL Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="{{ asset('assets/img/icons/arrows-h.svg') }}" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">Fluid Layout</h5>
                  <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
              </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="{{ asset('assets/img/icons/paragraph.svg') }}" width="20" alt="" />
              <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-page-url="modules/components/navs-and-tabs/vertical-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="modules/components/navs-and-tabs/top-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-top">Top</label>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="modules/components/navs-and-tabs/combo-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-combo">Combo</label>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1" href="modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="{{ asset('assets/img/generic/default.png') }}" alt="" /><span class="label-text"> Transparent</span></label>
                </div>
                @yield('content')
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="{{ asset('assets/img/generic/inverted.png') }}" alt="" /><span class="label-text"> Inverted</span></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
                  
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('assets/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
    <script src="{{ asset('assets/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <!-- ===============================================-->
    <!--    JavaScripts For Login Tab-->
    <!-- ===============================================-->
    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      document.getElementById("defaultOpen").click();

      </script>
      
    
    
    
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
  </body>

</html>