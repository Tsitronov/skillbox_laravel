<a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>
<!-- Authentication Links -->
 @guest

<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

@if (Route::has('register'))
<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

@endif
@else


<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
</form>

@endguest
@yield('content')

