@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session($msg))
      <div class="alert alert-{{ $msg }} alert-dismissible fade show mb-0 text-center" role="alert">
        {{ session($msg) }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
@endforeach