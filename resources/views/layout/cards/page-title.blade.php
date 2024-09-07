<div class="page-title dark-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">{{ $title }}</h1>
        <nav class="breadcrumbs">
            <ol>
                @foreach ($links as $link)
                    <li>
                        @if ($link['url'])
                            <a class="{{ $link['class'] }}" href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                        @else
                            {{ $link['name'] }}
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->
