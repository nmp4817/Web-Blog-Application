<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <a class="text-muted" href="/" style="margin-right:15px;">Home</a>
      <a class="text-muted" href="/about" style="margin-right:15px;">About</a>
      <a class="text-muted" href="/posts" style="margin-right:15px;">Blogs</a>
      <a class="text-muted" href="/posts/create">New Blog</a>
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="/">{{ config('app.name', 'WebBlog') }}</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      {{-- <a class="text-muted" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
      </a> --}}
      <!-- Authentication Links -->
      @guest
          <a class="btn btn-sm btn-outline-secondary" style="margin-right:10px;" href="{{ route('login') }}">Login</a>
          <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Sign up</a>
      @else
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/dashboard">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
      @endguest
    </div>
  </div>
</header>
