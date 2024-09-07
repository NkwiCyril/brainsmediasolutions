<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $portfolio->portfolioCategory->category }}">
    <img src="{{ $portfolio->image }}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>{{ $portfolio->title }}</h4>
      <p>{{ $portfolio->summary }}</p>
      {{-- <a href="{{ $portfolio->image }}" title="{{ $portfolio->title }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="{{ route('portfolios.show', ['slug' => $portfolio->slug]) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
    </div>
</div><!-- End Portfolio Item -->