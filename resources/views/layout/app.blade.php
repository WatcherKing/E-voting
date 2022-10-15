<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>{{ $page }} | {{ config('app.name') }}</title>
  <meta name="description" content="{{ $page }}" />
  <!-- Favicon Tags Start -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57"
    href="{{ asset('temp/img/favicon/apple-touch-icon-57x57.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="{{ asset('temp/img/favicon/apple-touch-icon-114x114.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="{{ asset('temp/img/favicon/apple-touch-icon-72x72.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144"
    href="{{ asset('temp/img/favicon/apple-touch-icon-144x144.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60"
    href="{{ asset('temp/img/favicon/apple-touch-icon-60x60.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120"
    href="{{ asset('temp/img/favicon/apple-touch-icon-120x120.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76"
    href="{{ asset('temp/img/favicon/apple-touch-icon-76x76.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152"
    href="{{ asset('temp/img/favicon/apple-touch-icon-152x152.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('temp/img/favicon/favicon-196x196.png') }}" sizes="196x196" />
  <link rel="icon" type="image/png" href="{{ asset('temp/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
  <link rel="icon" type="image/png" href="{{ asset('temp/img/favicon/favicon-32x32.png') }}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{ asset('temp/img/favicon/favicon-16x16.png') }}" sizes="16x16" />
  <link rel="icon" type="image/png" href="{{ asset('temp/img/favicon/favicon-128.png') }}" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="{{ asset('temp/img/favicon/mstile-144x144.png') }}" />
  <meta name="msapplication-square70x70logo" content="{{ asset('temp/img/favicon/mstile-70x70.png') }}" />
  <meta name="msapplication-square150x150logo" content="{{ asset('temp/img/favicon/mstile-150x150.png') }}" />
  <meta name="msapplication-wide310x150logo" content="{{ asset('temp/img/favicon/mstile-310x150.png') }}" />
  <meta name="msapplication-square310x310logo" content="{{ asset('temp/img/favicon/mstile-310x310.png') }}" />
  <!-- Favicon Tags End -->
  <!-- Font Tags Start -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&amp;display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('temp/font/CS-Interface/style.css') }}" />
  <!-- Font Tags End -->
  <!-- Vendor Styles Start -->
  <link rel="stylesheet" href="{{ asset('temp/css/vendor/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('temp/css/vendor/OverlayScrollbars.min.css') }}" />
  <!-- Vendor Styles End -->
  <!-- Template Base Styles Start -->
  <link rel="stylesheet" href="{{ asset('temp/css/styles.css') }}" />
  <link rel="stylesheet" href="{{ asset('temp/css/main.css') }}" />
  <!-- Template Base Styles End -->
  <script src="{{ asset('temp/js/base/loader.js') }}"></script>
</head>

<body>
  <div id="root">
    @include('layout.sidebar')
    <main>
      <div class="container">
        {{-- Contents -> Start--}}
        @yield('content')
        {{-- Contents -> End --}}
      </div>
    </main>
    <!-- Layout Footer Start -->
    <footer>
      <div class="footer-content">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6">
              <p class="mb-0 text-muted text-medium">Aspire Univas InterSystems 2022</p>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
    <!-- Layout Footer End -->
  </div>
  
  <!-- Vendor Scripts Start -->
  <script src="{{ asset('temp/js/vendor/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('temp/js/vendor/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('temp/js/vendor/OverlayScrollbars.min.js') }}"></script>
  <script src="{{ asset('temp/js/vendor/autoComplete.min.js') }}"></script>
  <script src="{{ asset('temp/js/vendor/clamp.min.js') }}"></script>
  <script src="{{ asset('temp/icon/acorn-icons.js') }}"></script>
  <script src="{{ asset('temp/icon/acorn-icons-interface.js') }}"></script>
  <!-- Vendor Scripts End -->
  <!-- Template Base Scripts Start -->
  <script src="{{ asset('temp/js/base/helpers.js') }}"></script>
  <script src="{{ asset('temp/js/base/globals.js') }}"></script>
  <script src="{{ asset('temp/js/base/nav.js') }}"></script>
  <script src="{{ asset('temp/js/base/search.js') }}"></script>
  <script src="{{ asset('temp/js/base/settings.js') }}"></script>
  <!-- Template Base Scripts End -->
  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('temp/js/common.js') }}"></script>
  <script src="{{ asset('temp/js/scripts.js') }}"></script>
  <!-- Page Specific Scripts End -->
@stack('js')

</body>
</html>
