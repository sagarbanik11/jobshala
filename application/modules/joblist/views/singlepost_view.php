<div class="container">
 <div class="list-group">
 <?php foreach ($jobs->result() as $r){?>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?= $r->role?></h5>
      <small><?= $r->date?></small>
    </div>
    <p class="mb-1"><?= $r->name?></p>
    <legend >Job Description</legend>
    <p class="mb-1"><?= $r->jdescription?></p>
    <legend >Job Requirement</legend>
    <p class="mb-1"><?= $r->jrequirement?></p>
    <legend >Location</legend>
    <small><?= $r->location?></small>
    <button onclick="window.location.href='<?php echo site_url(); ?>japplication/apply/<?= $r->j_id?>'" type="button" class="btn btn-dark float-right">Apply Now</button>
  </a>
  <?php }?>
</div>
</div>