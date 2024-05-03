<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Frontend/home.css') }}">
</head>

<body>
    <!--navbar top-->
    <div class="container">
        <div class="navbar-top">
            <div class="social-link">
                <i><img src="https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-articleLarge-v4.jpg?quality=75&auto=webp&disable=upscale"
                        alt="" width="40px"></i>
                <i><img src="https://static.vecteezy.com/system/resources/previews/018/930/476/non_2x/facebook-logo-facebook-icon-transparent-free-png.png"
                        alt="" width="30px"></i>
                <i><img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png"
                        alt="" width="30px"></i>
            </div>
            <div class="logo">
                <h3>FURNITURE</h3>
            </div>
            <div class="logo">
                <i><img src="https://cdn-icons-png.flaticon.com/512/3031/3031293.png" alt="" width="20px"></i>
                <i><img src="https://logowik.com/content/uploads/images/like-heart2255.logowik.com.webp" alt=""
                        width="30px"></i>
                <i><img src="https://www.citypng.com/public/uploads/preview/download-hd-shopping-cart-black-logo-icon-png-11640441685ymd041qjws.png"
                        alt="" width="30px"></i>
            </div>
        </div>
    </div>
    <!-- navbar top-->

    <!-- main content-->
    <div class="main-content">
        <nav class="navbar navbar-expand-md" id="navbar-color">

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span><i><img src="./image/menu.png" alt="" width="30px"></i></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                @method('post')
                                <button type="submit">logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link"href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ route('register') }}">Register</a></li>
                    @endauth
                    <li class="nav-item"><a class="nav-link"href="/home">Home</a></li>

                </ul>
            </div>
        </nav>

        <div class="content">
            <h1>Make Your Home
                <br> Modern Design.
            </h1>
            <div id="btn1"><button>ShopNow</button></div>
        </div>

    </div>
    <!--main content-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
