<li class="nav-item">
	<a class="nav-link {{ $loop->first ? 'active show' : '' }}" data-bs-toggle="tab" data-bs-target="#features-tab-{{ $loop->iteration }}">
	  <i class="bi bi-{{ $coreValue->icon }}"></i>
	  <div>
		<h4 class="d-lg-block text-truncate">{{ $coreValue->title }}</h4>
		<p>
		  {{ $coreValue->body }}
		</p>
	  </div>
	</a>
</li>