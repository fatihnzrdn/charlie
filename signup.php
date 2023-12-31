<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-festava-live.css" rel="stylesheet">
</head>


<body>

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-white"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center py-5">
                            <div class="mb-4 mb-md-5">
                            </div>
                            <div class="mb-4">
                                <h5 class="">Register Account</h5>
                            </div>
                            <form action="register.php" method="POST">
                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="text" class="form-control" id="input-username" name="username">
                                    <label for="input-username">Username</label>
                                </div>
                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-info w-100" type="submit">Register</button>
                                </div>
                            </form>

                            <div class="mt-5 text-center">
                                <p>Already have an account ? <a href="index.php"
                                        class="fw-medium text-decoration-underline"> Signin </a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>