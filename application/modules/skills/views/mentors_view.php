<div class="container">
<br>
 <legend >Mentors</legend>
 
 <?php echo $this->session->flashdata('msg'); ?>
<br>
    <table class="table table-hover table-bordered content_table">
      <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Skill</th>
            <th scope="col">Email</th>
            <th scope="col">About</th>
            <th scope="col">Website</th>
            <th scope="col">Action</th>
          </tr>
      </thead>
          <?php foreach ($data->result() as $r){?>
      <tbody>
        <tr>
          <td><?= $r->name?></td>
          <td><?= $r->skname?></td>
          <td><?= $r->email?></td>
          <td><?= $r->about?></td>
          <td><?= $r->about?></td>
          <td>
          <?php if (!isset($_SESSION['u_id'])) : ?>
          <button class="btn btn-block btn-info apply-btn" onclick="window.location.href='<?php echo site_url(); ?>japplication/mapply/<?= $r->u_id ?>'" type="button">
            Apply</button>
            <?php elseif ($_SESSION['authorization'] == 2) : ?>
              <button class="btn btn-block btn-info apply-btn" onclick="window.location.href='<?php echo site_url(); ?>japplication/mapply/<?= $r->u_id ?>'" type="button">
              Apply</button>
              <?php endif ?>
         </td>
         
      
        <tr>
      </tbody>
       <?php }?>
    </table>
</div>
