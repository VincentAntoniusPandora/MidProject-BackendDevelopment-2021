<!doctype html>
<html lang="en">
<head>
    <!-- Custom styles for this template -->
    <link href="css/loginstyles.css" rel="stylesheet">
</head>
<body>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <form class="form-horizontal" action="/login" method="POST" onsubmit="return checkStuff()">
                            @csrf
                            <h3 class="title">Login Form</h3>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" name="username" id="username" placeholder="Username" autofocus required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                            <button class="btn signin">Login</button>
                            <a href="/">HOME</a>
                            {{-- <button class="btn signin"> <a href="/">Home</a></button> --}}
                            <span class="register"><a href="/register">Register / Signup</a></span>
                            @if (session()->has('loginerror'))
                            <br>
                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                Login Gagal!!
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <br/>
    <br/>
    <br/>
    <br/>
    @if (session()->has('LoginError'))
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('LoginError')}}
            </div>
    @endif --}}
</body>

</html>
