<!doctype html>
<html lang="en">
<head>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/loginstyles.css')}}" rel="stylesheet">
</head>
<body>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <form class="form-horizontal" action="/register" method="POST">
                            @csrf
                            <h3 class="title">Registration Form</h3>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" minlength="10" maxlength="45" type="text" name="fullname" id="fullname" placeholder="Fullname" autofocus required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" minlength="3" maxlength="15" type="text" name="username" id="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" minlength="8" maxlength="20" type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" minlength="8" maxlength="20" type="password" name="conpassword" id="conpassword" placeholder="Confirm Password" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" name="address" id="address" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" name="age" id="age" placeholder="Age" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="date" name="birth" id="birth" placeholder="Birth Date" required>
                            </div>
                            <button class="btn signin">Register</button>
                        </form>
                        <a href="/">HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
