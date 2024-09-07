<!-- .navbar -->
<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="{{ route('home.index') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
    <li><a href="{{ route('about.index') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
    <li><a href="{{ route('services.index') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
    <li><a href="{{ route('contact-us.index') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
<!-- .navbar -->
