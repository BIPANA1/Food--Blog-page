<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="container" id="container-nav">
        <div class="nav">
            <ul>
                <span class="logo"> <a href="/" >FoodBlog  </span> </a>
                <li> <a href="/blog">Blog</a> </li>
                <li> <a href="/addBlog">Add Blog</a> </li>
                @if(auth()->user())

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif

            </ul>
        </div>
    </div>
    @yield('content')


</body>

</html>