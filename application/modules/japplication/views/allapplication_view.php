<div class="container" style="margin-top: 80px;">
 <h5 style="font-family: 700;" >Submitted Applications</h5>
 
 <?php echo $this->session->flashdata('msg'); ?>
<br><br>
    <table class="table table-hover  content_table">
      <thead class="thead-light">
          <tr>
            <th scope="col">Job Id</th>
            <th scope="col">Role</th>
            <th scope="col">Apply Date</th>
            <th scope="col">Company</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
      </thead>
          <?php foreach ($data->result() as $r){?>
      <tbody>
        <tr>
          <td><?= $r->job_id?></td>
          <td><?= $r->role?></td>
          <td><?= $r->adate?></td>
          <td><?= $r->name?></td>
          <?php if($r->jstatus==0):?>
           <td>Progress</td>
            <?php elseif($r->jstatus==1):?>
            <td>Selected</td>
            <?php elseif($r->jstatus==2):?>
            <td>Rejected</td>
          <?php endif?>
          <td>
         <a href="<?php echo site_url(); ?>scapplication/single/<?= $r->ja_id?>" class="btn">
         <i class="fa fa-eye" style="font-size:20px;color:black" aria-hidden="true"></i>     
         </a>
         </td>
         
      
        <tr>
      </tbody>
       <?php }?>
    </table>
</div>