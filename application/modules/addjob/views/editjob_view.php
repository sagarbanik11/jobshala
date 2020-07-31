<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ">
      <form class="form-horizontal" method="post" action="<?=site_url('addjob/edit')?>" enctype="multipart/form-data">
        <br>
        <fieldset>
          <legend >Update Job</legend>
          <?php foreach ($jobs->result() as $r){?>	
          <input type="text" name="jid" id="jid" value="<?= $r->j_id ?>" required hidden>
          <div class="form-group">
            <label for="jid" class="cols-sm-2 control-label">Job Id</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="job_id" id="job_id" value="<?= $r->job_id ?>" placeholder="Enter Job Id" required>
              </div>
              <?php echo form_error('jid', '<div class="error">', '</div>'); ?>		
            </div>
          </div>		
          <div class="form-group">
            <label for="role" class="cols-sm-2 control-label">Role</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="role" id="role" value="<?= $r->role ?>" placeholder="Enter Job Role" required>
              </div>
              <?php echo form_error('role', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="location" class="cols-sm-2 control-label">Location</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="location" id="location" value="<?= $r->location ?>" placeholder="Enter Job Location" required>
              </div>
              <?php echo form_error('location', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="cols-sm-2 control-label">Job Description</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="description" id="description" class="form-control" value="<?= $r->jdescription ?>" placeholder="Enter Full Job Description..." required><?= $r->jdescription ?></textarea>
              
              </div>
              <?php echo form_error('description', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="requirement" class="cols-sm-2 control-label">Job Requirements</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="requirement" id="requirement" class="form-control"  placeholder="Enter Full Job Requirements..." required><?= $r->jrequirement ?></textarea>
              
              </div>
              <?php echo form_error('requirement', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="industry" class="cols-sm-2 control-label">Status</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <select id="status" name="status" class="custom-select">
                <?php if ($r->status==1) : ?>
                  <option value="1" selected>Opened</option>
                  <option value="0" >Closed</option>
                  <?php elseif ($r->status==0) : ?>
                  <option value="0" selected>Closed</option>
                  <option value="1" >Opened</option>
                  <?php endif ?>
                </select>
              </div>
            </div>
          </div>
     <?php }?>
          <div class="form-group ">
            <button type="submit" class="btn btn-dark">Update</button>
          </div>
          <?php echo $this->session->flashdata('msg'); ?>
        </fieldset>
      </form>
     
    </div>
</div>
</div>
<style>
.error{
    color:red;
    
}
</style>
