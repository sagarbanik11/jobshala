<div class="container">
 <legend >Job List</legend>
 
 <div class="list-group">
 <?php foreach ($jobs->result() as $r){?>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?= $r->role?></h5>
      <small><?= $r->date?></small>
    </div>
    <p class="mb-1"><?= $r->name?></p>
    <small><?= $r->location?></small>
    <button onclick="window.location.href='<?php echo site_url(); ?>joblist/single/<?= $r->j_id?>'" type="button" class="btn btn-dark float-right">View More</button>
  </a>
  <?php }?>
</div>
</div>