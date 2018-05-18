<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Student Management</title>
</head>
<body>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Home<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'student/create' ? 'active' : '' }}"
                           href="/student/create"><i class="fa fa-plus-square"></i> Add new student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'student' ? 'active' : '' }}" href="/student"><i
                                class="fa fa-list-ul"></i> List student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</section>

<section>
    <div class="container">
        @include('includes.message')
        @section('content')
        @show
    </div>
</section>


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
