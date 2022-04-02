<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('font-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin | @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mx-5" href="">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">Home</a>
            </li><li class="nav-item active">
                <a class="nav-link" href="{{ route('manage-product') }}">Manage Product</a>
            </li><li class="nav-item active">
                <a class="nav-link" href="{{ route('add-product') }}">Add Product</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" href="#">Logout</a>
                <form action="{{ route('logout') }}" method="post" id="logoutForm">
                    @csrf
                </form>
            </li>
        </ul>

    </div>
</nav>
@yield('body')
</body>
 <script src="{{ asset('font-assets/js/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('font-assets/js/bootstrap.bundle.min.js') }}"></script>
</html>
