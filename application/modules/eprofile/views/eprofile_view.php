<div class="container">
    <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <?php echo $this->session->flashdata('msg'); ?><br>
    <?php foreach ($data->result() as $r){?>
       

        <b class="mb-1">Email</b>
        <p class="mb-1"><?= $r->email?></p>
        <b class="mb-1">Mobile</b>
        <p class="mb-1"><?= $r->mobile?></p>
        <b class="mb-1">Sector</b>
        <p class="mb-1"><?= $r->sector?></p>
        <b class="mb-1">Industry</b>
        <p class="mb-1"><?= $r->industry?></p>
        <b class="mb-1">Address</b>
        <p class="mb-1"><?= $r->address?></p>
        <b class="mb-1">About</b>
        <p class="mb-1"><?= $r->about?></p>
        <b class="mb-1">Website Address</b>
        <p class="mb-1"><?= $r->website?></p>
        <?php }?>
        <div class="col-md-2">
                    <button onclick="window.location.href='<?php echo site_url(); ?>eprofile/editprofile'" type="button" class="btn btn-dark float-right">Edit Profile</button>
        </div>
    </a>
    </div>
</div>