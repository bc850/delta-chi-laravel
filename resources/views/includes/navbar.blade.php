<header>
  <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="https://s3.amazonaws.com/delta-chi/dx-logo.png" style="width: 200px; height: auto;" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="/about/values">Delta Chi Values</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/about/local-history">Local History</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/about/scholarship">Scholarship</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/about/campus-involvement">Campus Involvement</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alumni
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="/philanthropy/josh-dykes-memorial-golf-tournament">Alumni Association</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/philanthropy/josh-dykes-memorial-golf-tournament">50th Anniversary</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Philanthropy
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="/philanthropy/josh-dykes-memorial-golf-tournament">Josh Dykes Memorial Golf Tournament</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/philanthropy/the-v-foundation">The V Foundation</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Posts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Recruitment
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="/recruitment/letter-from-recruitment-chair">Letter From Recruitment Chair</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/recruitment/our-recruitment">Our Recruitment</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/recruitment/why-join">Why Join Delta Chi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/philanthropy/the-v-foundation">Recommend a Member</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="/philanthropy/josh-dykes-memorial-golf-tournament">For Parents</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Contact Us</a>
          </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
              @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
            </li>
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/dashboard">Dashboard</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
</header>
