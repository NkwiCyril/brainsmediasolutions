@extends('layout.app')
@section('section')

<main class="main">

  <!-- Page Title -->
  @include('layout.cards.page-title', [
    'title' => 'Services' ,
    'links' => [
        [
            'name' => 'Home',
            'url' => route('home.index'),
            'class' => '',
        ],
        [
            'name' => 'Services',
            'url' => '',
            'class' => 'current',
        ]
    ],
])

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

</main>

@endsection