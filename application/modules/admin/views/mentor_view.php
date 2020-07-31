<div class="container">
<br>
 <legend >Mentor List</legend>
 
 <?php echo $this->session->flashdata('msg'); ?>

    <table class="table table-hover table-bordered content_table">
      <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
      </thead>
          <?php foreach ($mentor->result() as $r){?>
      <tbody>
        <tr>
          <td><?= $r->name?></td>
          <td><?= $r->email?></td>
          <td><?= $r->mobile?></td>
          <?php if($r->status==0):?>
           <td>Pending</td>
            <?php elseif($r->status==1):?>
            <td>Approved</td>
            <?php elseif($r->status==2):?>
            <td>Declined</td>
          <?php endif?>
          <td>
         <a href="<?php echo site_url(); ?>admin/dmentor/<?= $r->u_id?>" class="btn">
         <i class="fa fa-edit" style="font-size:20px;color:black" aria-hidden="true"></i>     
         </a>
         </td>
      
        <tr>
      </tbody>
       <?php }?>
    </table>
</div> 
