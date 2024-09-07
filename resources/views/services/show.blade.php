@extends('layout.app')
@section('section')
<main class="main">

    <!-- Page Title -->
    @include('layout.cards.page-title', [
    'title' => $service->title . ' | Service',
    'links' => [
        [
            'name' => 'Home',
            'url' => route('home.index'),
            'class' => '',
        ],
        [
            'name' => 'Services',
            'url' => route('services.index'),
            'class' => '',
        ],
        [
            'name' => $service->title,
            'url' => '',
            'class' => 'current',
        ]
    ],
])

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ $service->image }}" alt=""
                        class="img-fluid services-img">
                    <h4>{{ $service->title }}</h4>
                    <p>{{$service->summary}}</p>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <p>
                     {{ $service->body }} 
                    </p>
                    <div class="call-to-action">
                        <a class="cta-btn align-middle" style="margin-left: 0px"
                            href="{{ route('contact-us.index') }}">Contact
                            us for more</a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

</main>
@endsection