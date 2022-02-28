<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrolling Nav - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="/home">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        @if (Session::get('id_user'))
                        <li class="nav-link">Welcome | {{Session::get('fullname')}}</li>
                        <li class="nav-item"><a class="nav-link" href="/user/{{Session::get('id_user')}}">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/course/{{Session::get('id_user')}}">Course</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout">Log Out</a></li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/liatcourse">Course</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to Apeh learning</h1>
                <p class="lead">Website learning dengan materi pembelajaran mengenai IT</p>
                <a class="btn btn-lg btn-light" href="#user">Mulai Scroll</a>
            </div>
        </header>
        <!-- About section-->
        <section id="user">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>User Profile</h2>
                        <table>
                            <tr>
                                <td>
                                    Fullname
                                </td>
                                <td>
                                    : {{$user->fullname}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Username
                                </td>
                                <td>
                                    : {{$user->username}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    : {{$user->address}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone Number
                                </td>
                                <td>
                                    : {{$user->phone}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Age
                                </td>
                                <td>
                                    : {{$user->age}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    : {{$user->birth}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; ApehLearning 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
