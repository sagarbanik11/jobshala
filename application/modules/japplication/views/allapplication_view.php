<div class="container">
 <legend >Submitted Applications</legend>
 
 <?php echo $this->session->flashdata('msg'); ?>
<br><br>
    <table class="table table-hover table-bordered content_table">
      <thead>
          <tr>
            <th scope="col">Job Id</th>
            <th scope="col">Role</th>
            <th scope="col">Apply Date</th>
            <th scope="col">Company</th>
            <th scope="col">Status</th>
          </tr>
      </thead>
          <?php foreach ($data->result() as $r){?>
      <tbody>
        <tr>
          <td><?= $r->job_id?></td>
          <td><?= $r->role?></td>
          <td><?= $r->adate?></td>
          <td><?= $r->name?></td>
          <td>Progress</td>
         
      
        <tr>
      </tbody>
       <?php }?>
    </table>
</div>