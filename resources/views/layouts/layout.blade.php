<!doctype html>
<html lang="en">
@include('partials.head')
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{'/dashboard'}}">
        <img width="18%" src="/images/nt_logo_rev.png" alt="Neufy Logo">
        &nbsp <b> Net</b>Project
</a>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

@include('partials.sidebar')
 @yield('content')


    </main>
</div>
</div>
@include('partials.scripts')
@yield('pagescript')
</body>
</html>
