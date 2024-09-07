<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="service-item position-relative">
        <div class="icon">
            <i class="bi bi-{{ $service->icon }}"></i>
        </div>
        <a href="{{ route('services.show', ['slug' => $service->slug]) }}" class="stretched-link">
            <h3>{{ $service->title }}</h3>
        </a>
        <p>{{ $service->summary }}</p>
        <p class="pt-3 strong">Read more >>> </p>
    </div>
</div><!-- End Service Item -->
