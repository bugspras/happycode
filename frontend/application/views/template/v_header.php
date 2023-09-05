<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="<?= base_url('/')?>assets/css/pace.min.css" rel="stylesheet" />
  <script src="<?= base_url('/')?>assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="<?= base_url('/')?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="<?= base_url('/')?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="<?= base_url('/')?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="<?= base_url('/')?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('/')?>assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="<?= base_url('/')?>assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url('/')?>assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="<?= base_url('/')?>assets/css/dark-theme.css" rel="stylesheet" />
  <link href="<?= base_url('/')?>assets/css/semi-dark.css" rel="stylesheet" />
  <link href="<?= base_url('/')?>assets/css/header-colors.css" rel="stylesheet" />
  <?php $tb = json_decode($notifikasi); ?>
  <title>Happy - Code</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    <?php $this->load->view('template/v_menu');?>
    <!--end sidebar -->

    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="toggle-icon">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
       
        <div class="top-navbar-right ms-auto">

          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link dark-mode-icon" href="javascript:;">
                <div class="mode-icon">
                  <ion-icon name="moon-outline"></ion-icon>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="position-relative">
                <?php if(!empty($notifikasi)):?>
                <?php if($tb->status):?>
                  <?php $total = count($tb->data);?>
                <?php else:?>
                  <?php $total = 0;?>
                <?php endif;?>
                <?php else:?>
                  <?php $total = 0;?>
                <?php endif;?>
                  <span class="notify-badge"><?= $total?></span>
                  <ion-icon name="notifications-outline"></ion-icon>
                </div>
              </a>
                <?php if(!empty($notifikasi)):?>
              <div class="dropdown-menu dropdown-menu-end">

                <a href="javascript:;">
                  <div class="msg-header">
                    <p class="msg-header-title">Notifications</p>
                  </div>
                </a>
                <div class="header-notifications">
                  <?php if($tb->status):?>
                  <?php foreach ($tb->data as $key):?>
                    <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="notify text-primary">
                        <ion-icon name="people-outline"></ion-icon>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="msg-name"><?= $key->username?></span></h6>
                        <p class="msg-info"><?= $key->fullname?></p>
                      </div>
                    </div>
                    </a>
                  <?php endforeach;?>
                  <?php endif;?>
                </div>
                  <?php endif;?>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="user-setting">
                        <ion-icon name="people-outline"></ion-icon>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex flex-row align-items-center gap-2">
                        <ion-icon name="people-outline"></ion-icon>
                      <div class="">
                        <h6 class="mb-0 dropdown-user-name"><?= $this->session->userdata('username')?></h6>
                        <small class="mb-0 dropdown-user-designation text-secondary"><?= $this->session->userdata('fullname')?></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="<?= site_url('logout')?>">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="log-out-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

        </div>
      </nav>
    </header>
    <!--end top header-->

