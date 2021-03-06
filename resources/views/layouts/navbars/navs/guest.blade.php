<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('home') }}"><img width="120px" style="fill:white;" src='{{ asset('material') }}/img/logoUniandes.svg' /></a>
    </div>
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('home') }}"><img width="120px" style="fill:white;" src='{{ asset('material') }}/img/Logo_SVE.svg' /></a>
    </div>
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('home') }}"><img width="120px" style="fill:white;" src='{{ asset('material') }}/img/Logo_EDCO.svg' /></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">

        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          <a href="{{ url('certificados/publico') }}" class="nav-link">
            <i class="material-icons">check_circle_outline</i> {{ __('Validar certificado') }}
          </a>
        </li>

        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          <a href="{{ route('login') }}" class="nav-link">
            <i class="material-icons">fingerprint</i> {{ __('Ingresar') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
