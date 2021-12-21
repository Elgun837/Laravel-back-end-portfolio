<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}"><h2>Finance Business</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item @if(Request::segment(1) =="") active  @endif">
              <a class="nav-link" href="{{ route('homepage') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item @if(Request::segment(1) =="about-us") active  @endif">
              <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
            </li>
            <li class="nav-item  @if(Request::segment(1) =="services") active  @endif">
              <a class="nav-link" href="{{ route('services') }}">Our Services</a>
            </li>
            <li class="nav-item  @if(Request::segment(1) =="contact-us") active  @endif">
              <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
