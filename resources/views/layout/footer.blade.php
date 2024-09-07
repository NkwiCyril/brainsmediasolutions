<footer id="footer" class="footer dark-background">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <!-- About Section -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('home.index') }}" class="logo d-flex align-items-center">
            <span class="sitename">Brains Media Solutions</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Brains Media Solutions is your trusted partner for innovative web development and digital marketing solutions. With a commitment to excellence and over a decade of experience, we help businesses grow and thrive in the digital landscape. Contact us today to discover how we can elevate your online presence.</p><br>
            <p><strong>Phone:</strong> <span>+91 953 553 3588 / +91 994 536 3588</span></p>
            <p><strong>Email:</strong> <span>contact@brainsmediasolutions.com</span></p>
            <p><strong>Address:</strong> <span>Plot No 28, 2nd Floor, Ganeshpur Road, Belagavi - Karnataka 591108</span></p>
          </div>
        </div>

        <!-- Useful Links -->
        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('about.index') }}">About Us</a></li>
            <li><a href="{{ route('services.index') }}">Services</a></li>
            <li><a href="{{ route('contact-us.index') }}">Contact Us</a></li>
            <li><a href="{{ route('privacy-policy.index') }}">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Our Services -->
        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            @foreach($services as $service)
              <li><a href="{{ route('services.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a></li>
            @endforeach
          </ul>
        </div>

        <!-- Connect with Us -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Connect with Us</h4>
          <ul>
            <li><a href="https://www.linkedin.com/company/brainsmediasolutions">LinkedIn</a></li>
            <li><a href="https://www.facebook.com/brainsmediasolutions">Facebook</a></li>
            <li><a href="https://www.instagram.com/brains_media_solutions/">Instagram</a></li>
            <li><a href="https://twitter.com/brainsmedia2012">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div>
          © Copyright <strong><span>Brains Media Solutions</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://www.linkedin.com/in/nkwicyril/">Nkwi Cyril A.</a>
        </div>
      </div>

      <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
        <a href="https://www.facebook.com/brainsmediasolutions/"><i class="bi bi-facebook"></i></a>
        <a href="https://in.linkedin.com/in/brains-media-solutions"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.instagram.com/brainsmediasolutions"><i class="bi bi-instagram"></i></a>
        <a href="https://twitter.com/brainsmedia2012"><i class="bi bi-twitter"></i></a>
      </div>

    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('brainsmedia/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('brainsmedia/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('brainsmedia/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('brainsmedia/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('brainsmedia/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('brainsmedia/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('brainsmedia/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('brainsmedia/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('brainsmedia/assets/js/main.js') }}"></script>
