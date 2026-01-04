<header class="site-header">
    <div class="hero-header-11">
      <div class="hero-header-11-content">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light py-sm-2 py-1 px-0">
            <a class="navbar-brand" href="{{ route('dashboard') }}" style="font-size:24px">Welcome Mr Ambassador</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbar"
              aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="adminNavbar">
              <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.blogs.index') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" target="_blank">Visit Site <span class="fa fa-external-link"></span></a>
                </li>
                <li class="nav-item ml-lg-3">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger theme-button">Logout</button>
                    </form>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
