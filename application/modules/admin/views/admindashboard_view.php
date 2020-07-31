<div class="container" style="margin-top:50px;">
<div class=row>
<div class=col-md-6>
<form method="post" action="<?=site_url('admin/addskill')?>">
<center>
 <h6>Add Skills</h6>

</center> <hr>
  <div class="form-group mt-2">
    <label for="skname">Skill Name:</label>
    <input type="test" class="form-control" name="skname" id="skname">
  </div>
  <button type="submit" class="btn btn-primary">Add Skill</button>
</form>

<table class="table table-hover table-bordered content_table mt-2">
      <thead class="thead-light">
          <tr>
            <th scope="col" >Skill</th>
            <!-- <th scope="col">Action</th> -->
          </tr>
      </thead>
      <?php foreach ($skills->result() as $r){?>
      <tbody>
        <tr>
          <td class="col-md-4"><?= $r->skname?></td>
        <!-- <td>
            <a href="#" class="btn">
            <i class="fa fa-trash" style="font-size:15px;color:red" aria-hidden="true"></i>            
            </a>
        </td> -->
      
        <tr>
      </tbody>
      <?php }?>
    </table>
</div>


<div class=col-md-6>
<form method="post" action="<?=site_url('admin/addindustry')?>">
<center>
 <h6>Add Industries</h6>

</center> <hr>	
  <div class="form-group mt-2">
    <label for="iname">Industry Name:</label>
    <input type="text" class="form-control" name="iname" id="iname">
  </div>
  <button type="submit" class="btn btn-primary">Add Industry</button>
</form>

<table class="table table-hover table-bordered content_table mt-2">
      <thead class="thead-light">
          <tr>
            <th scope="col" >Industry</th>
            <!-- <th scope="col">Action</th> -->
          </tr>
      </thead>
      <?php foreach ($industry->result() as $r){?>
      <tbody>
        <tr>
          <td class="col-md-4"><?= $r->iname?></td>
        <!-- <td>
            <a href="#" class="btn">
            <i class="fa fa-trash" style="font-size:15px;color:red" aria-hidden="true"></i>            
            </a>
        </td> -->
      
        <tr>
      </tbody>
      <?php }?>
    </table>
</div>
</div>
</div>