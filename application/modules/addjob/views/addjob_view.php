<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ">
      <form class="form-horizontal" method="post" action="<?=site_url('addjob/add')?>" enctype="multipart/form-data">
        <br>
        <fieldset>
          <legend >Add Job</legend>	
          <div class="form-group">
            <label for="jid" class="cols-sm-2 control-label">Job Id</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="jid" id="jid"  placeholder="Enter Job Id" required>
              </div>
              <?php echo form_error('jid', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
         
          <div class="form-group">
            <label for="role" class="cols-sm-2 control-label">Role</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="role" id="role"  placeholder="Enter Job Role" required>
              </div>
              <?php echo form_error('role', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="location" class="cols-sm-2 control-label">Location</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="location" id="location"  placeholder="Enter Job Location" required>
              </div>
              <?php echo form_error('location', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="industry" class="cols-sm-2 control-label">Industry</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <select id="industry" name="industry" class="custom-select">
                <?php foreach ($industry->result() as $r){?>	
                  <option value="<?= $r->iname ?>" selected><?= $r->iname ?></option>
                  <?php }?>
                </select>
              </div>
              <?php echo form_error('industry', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="cols-sm-2 control-label">Job Description</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="description" id="description" class="form-control" placeholder="Enter Full Job Description..." required></textarea>
              
              </div>
              <?php echo form_error('description', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group">
            <label for="requirement" class="cols-sm-2 control-label">Job Requirements</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="requirement" id="requirement" class="form-control" placeholder="Enter Full Job Requirements..." required></textarea>
              
              </div>
              <?php echo form_error('requirement', '<div class="error">', '</div>'); ?>		
            </div>
          </div>
          <div class="form-group ">
            <button type="submit" class="btn btn-dark">Post</button>
          </div>
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