
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> {{ __('Menu') }}
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href=" {{ url('/') }} " class="nav-link pl-0"> {{ __('Accueil') }} </a></li>
            <li class="nav-item"><a href=" {{ route('about') }} " class="nav-link">  {{ __('A propos') }} </a></li>
            <li class="nav-item"><a href=" {{ route('courses') }} " class="nav-link"> {{ __('Nos Formations') }} </a></li>
            <li class="nav-item"><a href=" {{  route('teachers')  }} " class="nav-link"> {{ __('Staff') }} </a></li>
            @if(Route::has('register'))
            <li class="nav-item"><a href=" {{ route('register') }} " class="nav-link"> {{ __('Inscription') }} </a></li>
            @endif
          <li class="nav-item"><a href=" {{ route('contact') }} " class="nav-link"> {{ __('Contact') }} </a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
