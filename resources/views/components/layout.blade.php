<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Google Noto Sans Font Families -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700;800&family=Noto+Sans+Myanmar:wght@200;300;400;500;600&family=Noto+Sans:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>WILLTEC Myanmar</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid px-lg-5">

            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img width="200" src="{{ asset('/main-logo-dark.png') }}" alt="">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Off Canvas Menu-->
            <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <!-- Sidebar Header -->
                <div class="offcanvas-header text-white">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">WILLTEC Myanmar</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none border-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Sidebar Body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Recruitment Info
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">News</a></li>
                                <li><a class="dropdown-item" href="#">Blogs</a></li>
                                <li><a class="dropdown-item" href="#">Job Search</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Service
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Human Resource Consulting Service</a></li>
                                <li><a class="dropdown-item" href="#">Training Consulting Service</a></li>
                                <li><a class="dropdown-item" href="#">JLS Franchise Service</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="navbar-nav d-flex flex-sm-row align-items-center pe-3 sidenav">
                        <a href="#login" class="nav-link">Login</a>
                        <span class="nav-link align-self-center mx-3"> | </span>
                        <a href="#register" class="nav-link">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>




    <main>
        {{ $slot }}
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script>
        const navElement = document.querySelector('nav')

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                navElement.classList.add('shadow-sm', 'bg-body-tertiary');
            } else {
                navElement.classList.remove('shadow-sm', 'bg-body-tertiary');
            }
        })
    </script>
</body>

</html>