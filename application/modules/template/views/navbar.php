<nav class="navbar navbar-expand-lg">
  <div class="container nav-wrapper">
    <b> <a class="navbar-brand brand-logo" href="<?php echo site_url(); ?>">Amples</a></b>
    
    <?php// if (isset($_SESSION['u_id'])) : print_r($_SESSION['authorization'])?>
      <!-- <a class="navbar-brand">Hello <?php //echo $this->session->userdata['name'] ?> !</a> -->
    <?php// endif ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
          <a class="nav-item nav-link active" href="<?= site_url('joblist') ?>">Job List</a>
          <a class="nav-item nav-link active" href="<?= site_url('home') ?>">Opportunities</a>
          <a class="nav-item nav-link active" href="<?= site_url('tenders') ?>">Tenders</a>
          <a class="nav-item nav-link active" href="<?= site_url('skills') ?>">Skills</a>
        <?php if (!isset($_SESSION['u_id'])) : ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Register
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo site_url(); ?>user_register">User</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>employeer_register">Employeer</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>mentor_register">Mentor</a>
            </div>
          </li>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>login">Login</a>
        <?php elseif ($this->session->userdata['authorization'] == 1) : ?>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>eprofile">Profile</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>eprofile/dashboard">Dashboard</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>addjob">Add Job</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>scapplication">Applications</a>
          <a class="nav-item nav-link active" href="<?= site_url('login/logout') ?>">Logout</a>
        <?php elseif ($this->session->userdata['authorization'] == 3) : ?>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>mprofile">Profile</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>scapplication/mapplication">Applications</a>
          <a class="nav-item nav-link active" href="<?= site_url('login/logout') ?>">Logout</a>
        <?php elseif ($this->session->userdata['authorization'] == 0) : ?>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>admin">Dashbaord</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>admin/employeer">Employeer</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>admin/employee">Employee</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>admin/mentor">Mentor</a>
          <a class="nav-item nav-link active" href="<?= site_url('login/logout') ?>">Logout</a>
        <?php else : ?>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>japplication/allview">Applications</a>
          <a class="nav-item nav-link active" href="<?= site_url('login/logout') ?>">Logout</a>
        <?php endif ?>

      </div>
    </div>
  </div>

</nav>
</header>

<body>