
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding:20px">
      <b> <a class="navbar-brand" href="<?php echo site_url(); ?>">JobShala</a></b>
      <?php if (isset($_SESSION['u_id'])):?>
      <a class="navbar-brand">Hello <?= $this->session->userdata['name']?> !</a>
      <?php endif?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" >
        <div class="navbar-nav " >
        <a class="nav-item nav-link active" href="<?=site_url('joblist')?>">Job List</a>
        <a class="nav-item nav-link active" href="<?=site_url('home')?>">Opportunities</a>
        <a class="nav-item nav-link active" href="<?=site_url('home')?>">Tenders</a>
        <a class="nav-item nav-link active" href="<?=site_url('home')?>">Skills</a>
          <?php if (!isset($_SESSION['u_id'])):?>
     
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
          <?php elseif($this->session->userdata['authorization']==1):?>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>eprofile">Dashboard</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>addjob">Add Job</a>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>applications">Applications</a>
          <a class="nav-item nav-link active" href="<?=site_url('login/logout')?>">Logout</a>
          <?php else:?>
          <a class="nav-item nav-link active" href="<?php echo site_url(); ?>japplication/allview">Applications</a>
          <!-- <a class="nav-item nav-link active" href="<?php echo site_url(); ?>myorder">My Order</a> -->
          <a class="nav-item nav-link active" href="<?=site_url('login/logout')?>">Logout</a>
          <?php endif?>
          
        </div>
      </div>
    </nav>
  </header>
<body>
