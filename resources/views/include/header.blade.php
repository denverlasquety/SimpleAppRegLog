<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#" style="font-family: 'Segoe UI', Arial, sans-serif; font-size: 24px; color: #FFF;">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="font-family: 'Roboto', Arial, sans-serif; font-size: 16px; color: #FFF;">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" style="font-family: 'Roboto', Arial, sans-serif; font-size: 16px; color: #FFF;">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}" style="font-family: 'Roboto', Arial, sans-serif; font-size: 16px; color: #FFF;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('registration') }}" style="font-family: 'Roboto', Arial, sans-serif; font-size: 16px; color: #FFF;">Registration</a>
        </li>
        @endauth
      </ul>
      <span class="navbar-text" style="font-family: 'Segoe UI', Arial, sans-serif; font-size: 16px; color: #FFF;">
        @auth
        <span>Welcome, {{ auth()->user()->name }}</span>
        @endauth
      </span>
    </div>
  </div>
</nav>
