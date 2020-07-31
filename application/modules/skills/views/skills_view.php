<br><br>
<div class="container">
    <div class="row">
            <?php foreach ($skills->result() as $r){?>
                <div class="col-sm-6 col-lg-4 text-center">
                
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title"><?= $r->skname?></h5>
                        <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <button onclick="window.location.href='<?php echo site_url(); ?>skills/mentors/<?= $r->m_id?>'" type="button" class="btn btn-primary">View Mentors</button>
                        </div>
                        <div class="col-md-6">
                            <button onclick="window.location.href='<?php echo site_url(); ?>joblist/single/<?= $r->sk_id?>'" type="button" class="btn btn-primary">View Details</button>
                          </div>
                        
                        </div>
                    </div>
                </div>
            
            </div>
                
            <?php }?>
           
        </div>
        </div>