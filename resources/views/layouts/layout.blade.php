<!doctype html>
<html lang="en">
@include('partials.head')
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{'/dashboard'}}">
        <img width="18%" src="/images/nt_logo_rev.png" alt="Neufy Logo">
        &nbsp <b> Net</b>Project
</a>

<!-- Right Side Of Navbar -->
 <!-- Authentication Links -->
 @guest
 <div class="px-3">
 <a class="btn btn-success btn-sm " href="{{ route('login') }}" role="button" id="dropdownMenuLink"  aria-haspopup="true" aria-expanded="false">
        {{ __('Login') }}

 </a>
</div>
 @else
 <div class="dropleft  px-3">
        <a class="btn btn-outline-success btn-sm dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     {{ Auth::user()->name }}
        </a>

 <div class="dropdown-menu userdiv" aria-labelledby="dropdownMenuLink">
   <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
   document.getElementById('logout-form').submit();">
  <img src="images/icons/feather/log-out.svg">
  </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
 </div>
@endif
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
