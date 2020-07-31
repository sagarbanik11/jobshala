<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ">
      <form class="form-horizontal" method="post" action="<?=site_url('eprofile/update')?>" enctype="multipart/form-data">
        <br>
        <fieldset>
          <legend >Edit Profile</legend>
          <?php foreach ($data->result() as $r){?>
          <div class="form-group">
            <label for="about" class="cols-sm-2 control-label">About Company</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="about" id="about" class="form-control" placeholder="Enter Your Bio"><?= $r->about?></textarea>
              </div>
            </div>
          </div>		
          <div class="form-group">
            <label for="address" class="cols-sm-2 control-label">Address</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="address" id="address" class="form-control" placeholder="Enter Your Address"><?= $r->address?></textarea>
              </div>
            </div>
          </div>		
				
            <div class="form-group">
            <label for="website" class="cols-sm-2 control-label">Website Link</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="website" id="website" value="<?= $r->website?>" placeholder="Enter Your Website Address" required>
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