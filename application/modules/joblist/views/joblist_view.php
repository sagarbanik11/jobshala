<style>
  .list-group {
    cursor: none;
  }

  .job-block {
    float: left;
    padding: 60px 0;
    position: relative;
    width: 100%;
    z-index: 1;
  }

  .job-listing {
    float: left;
    width: 100%;
    display: table;
    padding: 30px 10px;
    background: #fff;
    border-left: 2px solid #fff;
    padding-right: 30px;
  }
</style>

<div class="container" style="margin-top: 70px;">
  <h3 style="text-align:center">Job List</h3>
  <div style="text-align:center;color:gray">
    <small>Leading Organisations already using job and talent.</small>
  </div>
  <div class="job-block" style="display: flex;">
    <div class="job-listing">
      <?php foreach ($jobs->result() as $r) { if($r->jlstatus==1){ ?>
        <div class="mb-3">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?= $r->role ?></h5>
            <small><?= $r->date ?>
            <br> <?= $r->sector ?>
            </small>
          </div>
          <p class="mb-1"><?= $r->name ?></p>
          <small><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $r->location ?></small>
          <button onclick="window.location.href='<?php echo site_url(); ?>joblist/single/<?= $r->j_id ?>'" type="button" class="btn btn-info float-right">View Details</button>
          <hr>
        </div><br>
      <?php } }?>
    </div>
  </div>
</div>
