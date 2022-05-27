<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FishPedia</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">FishPedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                @if (auth()->user() == NULL)
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/login')}}">Login
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/register')}}">Register
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                @endif
                @if (auth()->user() != NULL)
                    @if (auth()->user()->role == 'user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/favorite')}}">Favorites</a>
                        </li>
                    @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/logout'}}">Logout</a>
                </li>


            </ul>

            <form action="/" class="d-flex">
                <input id="search" name="q" class="form-control me-sm-2" type="search" placeholder="Search Fish">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            @endif
        </div>
    </div>
</nav>

@yield('content')
<footer style="position: sticky; bottom: 0; background-color: #7dc3ae">
    <div>
        <p style="text-align: center; margin: 0; color: white">
            &copy; LC036
        </p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>
