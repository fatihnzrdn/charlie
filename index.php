<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sign In</title>
</head>
<body>
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-white"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center py-5">
                            <div class="mb-4">
                                <h5>Welcome Back !</h5>
                                <p>Sign in to continue.</p>
                            </div>
                            <form action="verify_login.php" method="POST">
                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="text" class="form-control" id="input-username" name="username" placeholder="Enter User Name">
                                    <label for="input-username">Username</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="password" class="form-control" id="input-password" name="password" placeholder="Enter Password">
                                    <label for="input-password">Password</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-padlock"></i>
                                    </div>
                                </div>

                                <!-- <div class="form-floating form-floating-custom mb-2">
                                    <input type="text" class="form-control" id="input-captcha" name="captcha" placeholder="Enter Captcha">
                                    <label for="input-captcha">Captcha</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-lock-access"></i>
                                    </div>
                                </div>

                                <div>
                                    <img src="captcha.php" alt="CAPTCHA">
                                </div> -->

                                <div class="mt-3">
                                    <button class="btn btn-info w-100" type="submit" name="login">Log In</button>
                                </div>
                            </form><!-- end form -->

                            <div class="mt-5 text-center text-muted">
                                <p>Don't have an account? <a href="auth-signup-basic.php" class="fw-medium text-decoration-underline">Signup</a></p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->
</body>
</html>