<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="<?= base_url('/')?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?= base_url('/')?>assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="<?= base_url('/')?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?= base_url('/')?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('/')?>assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>Happy Code - Login</title>
</head>

<body class="bg-white">

    <!--start wrapper-->
    <div class="wrapper">
        <div class="">
            <div class="row g-0 m-0">
                <div class="col-xl-6 col-lg-12">
                    <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="login-cover-wrapper">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="text-left">
                                    <h4>Welcome Back !</h4>
                                    <p>Sign In to continue</p>
                                </div>
                                <form action="<?= site_url('auth')?>" method="post" class="form-body row g-3">
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckRemember">
                                            <label class="form-check-label" for="flexSwitchCheckRemember">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 text-end">
                                        <a href="authentication-reset-password-cover.html">Forgot Password?</a>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Sign In</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 text-center">
                                        <p class="mb-0">Don't have an account? <a
                                                href="<?= site_url('registrasi')?>">Sign up</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end wrapper-->


</body>

</html>