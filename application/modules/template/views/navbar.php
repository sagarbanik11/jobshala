<nav class="navbar navbar-expand-lg">
  <div class="container nav-wrapper">
    <b> <a class="navbar-brand brand-logo" href="<?php echo site_url(); ?>">Amples</a></b>

    <?php// if (isset($_SESSION['u_id'])) : print_r($_SESSION['authorization'])?>
    <!-- <a class="navbar-brand">Hello <?php //echo $this->session->userdata['name'] 
                                        ?> !</a> -->
    <?php// endif ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
        <a class="nav-item nav-link active" href="<?= site_url('home') ?>">Opportunities</a>
        <a class="nav-item nav-link active" href="<?= site_url('tenders') ?>">Tenders</a>
        <a class="nav-item nav-link active" href="<?= site_url('home') ?>">Skills</a>
        <?php if (!isset($_SESSION['u_id'])) : ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Register
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo site_url(); ?>user_register">User</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>employeer_register">Employeer</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>restaurant_register">Mentor</a>
            </div>
          </li>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>login">Login</a>
        <?php elseif ($this->session->userdata['authorization'] == 1) : ?>

          <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link active" href="#" role="button" id="#myprofile-info" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="myprofile-info">
              <a class="dropdown-item" href="<?= site_url('eprofile') ?>">Posted Jobs</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>addjob">Add Job</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>scapplication">Applications</a>
              <a class="dropdown-item" href="<?= site_url('login/logout') ?>">Logout</a>
            </div>
          </li>
        <?php else : ?>
          <a class="nav-item nav-link active" href="<?= site_url('joblist') ?>">Job List</a>

          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>japplication/allview">Applications</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>eprofile">My Profile</a>
          <a class="nav-item nav-link active" href="<?= site_url('login/logout') ?>">Logout</a>
        <?php endif ?>

      </div>
    </div>
  </div>

</nav>
</header>

<body>