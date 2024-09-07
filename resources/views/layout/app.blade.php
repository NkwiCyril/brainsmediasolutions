<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Favicons -->
  <link href="{{ asset('brainsmedia/assets/img/logos/bms_logo.jpeg') }}" rel="icon">
  <link href="{{ asset('brainsmedia/assets/img/logos/bms_logo.jpeg') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('brainsmedia/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('brainsmedia/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('brainsmedia/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('brainsmedia/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('brainsmedia/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('brainsmedia/assets/css/main.css') }}" rel="stylesheet">

  <title>Brains Media Solutions | Empowering Your Businesses with Tech</title>

</head>


<body>
  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-centeR">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home.index') }}" class="logo d-flex align-items-center justify-content-center bg-white rounded-circle p-1">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('brainsmedia/assets/img/logos/bms_logo-nobg.png') }}" alt="">
        </a>

        <!-- navigation bar -->
        @include('layout.nav')


      </div>

    </div>

  </header>
  {{-- Show all session flash for success or error --}}
  @include('layout.cards.flash-message-card')

  <!-- Yield the various sections from Home to About when they are selected -->
  @yield('section')

  <!-- Footer section -->
  @include('layout.footer')

</body>

</html>