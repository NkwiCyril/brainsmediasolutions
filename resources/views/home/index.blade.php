@extends('layout.app')
@section('section')

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <img src="{{ asset('brainsmedia/assets/img/hero-carousel/digital-1.jpg') }}" alt="Brains Media Solutions">
        <div class="container">
          <h2>Brains Media Solutions: Innovating Your Digital Future</h2>
          <p>Leading the way in web development, mobile app solutions, and digital marketing for your business success.</p>
          <a href="{{ route('contact-us.index') }}" class="btn-get-started">Contact Us</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="{{ asset('brainsmedia/assets/img/hero-carousel/web_dev-2.jpg') }}" alt="">
        <div class="container">
          <h2>Expert Web Development</h2>
          <p>We create responsive, user-friendly websites that elevate your brand and engage your audience.</p>
          <a href="{{ route('contact-us.index') }}" class="btn-get-started">Contact Us</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="{{ asset('brainsmedia/assets/img/hero-carousel/web_dev-3.png') }}" alt="">
        <div class="container">
          <h2>Digital Marketing Strategies</h2>
          <p>Grow your business with our data-driven digital marketing solutions.</p>
          <a href="{{ route('contact-us.index') }}" class="btn-get-started">Contact Us</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="{{ asset('brainsmedia/assets/img/hero-carousel/app-dev.jpg') }}" alt="">
        <div class="container">
          <h2>Mobile App Development</h2>
          <p>Empowering businesses with customized mobile applications to connect with customers on the go.</p>
          <a href="{{ route('contact-us.index') }}" class="btn-get-started">Contact Us</a>
        </div>
      </div><!-- End Carousel Item -->

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </div>

  </section><!-- /Hero Section -->

  <!-- Call To Action Section -->
  @include('layout.cards.join-now-card')

  <!-- Services Section -->
  <section id="services" class="services section">
    <div class="container">
      <div class="row gy-4">
        @foreach($services as $service)
        @include('layout.cards.service-card', ['service' => $service])
        @endforeach
      </div>
    </div>
  </section><!-- /Services Section -->

  <!-- About Us Section -->
  <section id="features" class="features section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Why Choose Brains Media Solutions?</h2>
      <p>We bring expertise, innovation, and a commitment to delivering exceptional value in web development, digital marketing, and mobile applications.</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-5 d-flex align-items-center">
          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
            @foreach($coreValues as $coreValue)
            @include('layout.cards.core-value-card', ['coreValue' => $coreValue, 'loop' => $loop])
            @endforeach
          </ul>
        </div>

        <div class="col-lg-6 mt-4 mt-md-0">
          <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            @foreach($coreValues as $coreValue)
            @include('layout.cards.core-value-image', ['coreValue' => $coreValue, 'loop' => $loop])
            @endforeach
          </div>
        </div>

      </div>

    </div>

  </section><!-- /About Us Section -->

  @include('layout.cards.call-to-action')

</main><!-- /Main -->

@endsection
