@extends('layout.app')
@section('section')
    
<main class="main">

<!-- Page Title -->
@include('layout.cards.page-title', [
    'title' => 'Contact' ,
    'links' => [
        [
            'name' => 'Home',
            'url' => route('home.index'),
            'class' => '',
        ],
        [
            'name' => 'Contact',
            'url' => '',
            'class' => 'current',
        ]
    ],
])

<!-- Contact Section -->
<section id="contact" class="contact section">

  <div class="container" data-aos="fade">

    <div class="row gy-5 gx-lg-5">

      <div class="col-lg-4">

        <div class="info">
          <h3>Get in touch</h3>
          <p>Reach out to Brains Media Solutions for expert web development, digital marketing, and mobile app solutions. Fill out the form below, and our team will get back to you.</p>

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location</h4>
              <p class="pb-2 mt-2">Plot No 28, 2nd Floor, Ganeshpur Road, Belagavi - Karnataka 591108, India</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>contact@brainsmediasolutions.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p>+91 953 553 3588 / +91 994 536 3588</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      <div class="col-lg-8">
        <form action="{{ route('contact-us.store') }}" method="post" role="form" class="php-email-form">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

</main>

@endsection
