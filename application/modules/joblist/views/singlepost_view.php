<style>
  .apply-btn {
    border-radius: 8px;
    padding: 10px 10px;
  }

  .jd {
    font-size: 14px;
  }
</style>

<div class="container" style="margin-top:100px">
  <?php foreach ($jobs->result() as $r) { ?>

    <div class="row">
      <div class="col-md-8">
        <h5 class="mb-1"><?= $r->name; ?></h5>
        <!-- Please update this from the DB in next deployment -->
        <small><?= $r->address ?></small>
        <hr>
        <div class="d-flex w-100 justify-content-between">
          <p class="mb-1">Position Offered: <?= $r->role ?></p>
          <small>Date Posted: <?= $r->date ?></small>
        </div>
        <br>
        <p>Job ID: <?= $r->job_id ?></p>

        <h5>Job Description</h5>
        <p class="mb-1 jd"><?= $r->jdescription ?></p>
        <br>
        <h5>Job Requirements</h5>
        <p class="mb-1 jd"><?= $r->jrequirement ?></p>
        
      <?php } ?>
      </div>

      <?php foreach ($jobs->result() as $r) { ?>
        <div class="col-md-4">
        <h5>Job Overview</h5>

          <div class="card" >
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><small>Job Location<br><?= $r->location?></small></li>
              <li class="list-group-item"><small>Industry<br><?= $r->industry?></small></li>
              <li class="list-group-item"><small>Status
              <div id="status-text">
              <?php if($r->status == 1): echo "Applications Open"; 
                else: echo "Closed"; ?></div>
                
                <?php endif?></small></li>
              
            </ul>
          </div>
          <br>
          <?php if (!isset($_SESSION['u_id'])) : ?>
          <button class="btn btn-block btn-info apply-btn" onclick="window.location.href='<?php echo site_url(); ?>japplication/apply/<?= $r->j_id ?>'" type="button">
            Apply Now <i class="fa fa-send-o"></i></button>
            <?php elseif ($this->session->userdata['authorization'] == 2) : ?>
              <button class="btn btn-block btn-info apply-btn" onclick="window.location.href='<?php echo site_url(); ?>japplication/apply/<?= $r->j_id ?>'" type="button">
              Apply Now <i class="fa fa-send-o"></i></button>
              <?php endif ?>
      
        </div>
    </div>
  </a>
  <script>
                if(document.querySelector('#status-text').textContent.trim()=='Closed')
                document.querySelector('.apply-btn').style.display='none';</script>
      <?php } ?>
</div>
</div> 


