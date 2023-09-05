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

  <title>Happy Code - Registrasi</title>
</head>

<body>

  <div class="login-bg-overlay au-sign-in-basic"></div>

  <!--start wrapper-->
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
        <div class="container-fluid">
          <a href="javascript:;">
          <h5>Happy Code</h5>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Create New Account</h4>
                <p>Get your free account now</p>
              </div>
              <form action="<?= site_url('addregistrasi')?>" enctype="multipart/form-data" method="post" class="form-body row g-3">
                <div class="col-12 col-lg-12">
                  <div class="position-relative border-bottom my-3">
                    <div class="position-absolute seperator-2 translate-middle-y"></div>
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="abc@example.com">
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="abc">
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Photo</label>
                  <input type="file" class="form-control" name="photo" placeholder="png, jpg">
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">FullName</label>
                  <input type="text" class="form-control" name="fullname" placeholder="abc example">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Your password">
                </div>
                  <div class="col-12 col-lg-12">
                    <div class="form-check">
                      <label class="form-check-label" for="flexCheckChecked">
                      by registering you agree to the <a href="#"><u>Terms of Use</u></a>
                      </label>
                    </div>
                  </div>
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                  </div>
                </div>
                  <div class="col-12 col-lg-12">
                    <div class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                      <a href="https://id-id.facebook.com/" target="_blank" class=""><img src="assets/images/icons/facebook.png" alt=""></a>
                      <a href="https://www.google.com/?hl=ID" target="_blank" class=""><img src="assets/images/icons/google.png" alt=""></a>
                    </div>
                  </div>
                <div class="col-12 col-lg-12 text-center">
                  <p class="mb-0">Don't have an account? <a href="<?= site_url('/')?>"><u>Sign up</u></a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="text-center">
          <p class="my-4">© 2023 Created with love by me .</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->



  <script src="<?= base_url('/')?>assets/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>