<div class="container">
 <legend >Company Job List</legend>
 
 <?php echo $this->session->flashdata('msg'); ?>
 <button onclick="window.location.href='<?php echo site_url(); ?>addjob'" type="button" class="btn btn-dark float-right">Add Job</button>
<br><br>
    <table class="table table-hover table-bordered content_table">
      <thead>
          <tr>
            <th scope="col">Job Id</th>
            <th scope="col">Role</th>
            <th scope="col">Post Date</th>
            <th scope="col">Sector</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
      </thead>
          <?php foreach ($jobs->result() as $r){?>
      <tbody>
        <tr>
          <td><?= $r->job_id?></td>
          <td><?= $r->role?></td>
          <td><?= $r->date?></td>
          <td><?= $r->industry?></td>
          <td>  <p class="card-text">
                        <svg class="bi bi-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" <?php 
                        if($r->status==1){ ?> fill="#008200"  <?php }else{ ?> fill="#964122"<?php }?>><circle cx="8" cy="8" r="8"/></svg>
                       </p></td>
          <td>
         
            <a href="#" class="btn">
            <i class="fa fa-edit" style="font-size:25px;color:orange"></i>         
            </a>
            <a href="#" class="btn">
            <i class="fa fa-eye" style="font-size:25px;color:black" aria-hidden="true"></i>     
            </a>
            <a href="#" class="btn">
            <i class="fa fa-trash" style="font-size:25px;color:red" aria-hidden="true"></i>            
            </a>

  </td>
      
        <tr>
      </tbody>
       <?php }?>
    </table>
</div> 
<style>
a.btn:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 a.btn {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }
</style>