<div class="container" style="margin-top:50px">
<center><h5>Applications for Mentorship</h5></center>
<hr> 
 <?php echo $this->session->flashdata('msg'); ?>
<br><br>
    <table class="table table-hover content_table">
      <thead class="thead-light">
          <tr>
            <th scope="col">Candidate Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Apply Date</th>
          </tr>
      </thead>
          <?php foreach ($data->result() as $r){?>
      <tbody>
        <tr>
          <td><?= $r->name?></td>
          <td><?= $r->email?></td>   
          <td><?= $r->mobile?></td>
          <td><?= $r->date?></td>     
        <tr>
      </tbody>
       <?php }?>
    </table>
</div>