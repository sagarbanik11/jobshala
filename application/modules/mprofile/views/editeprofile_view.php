<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ">
      <form class="form-horizontal" method="post" action="<?=site_url('mprofile/update')?>" enctype="multipart/form-data">
        <br>
        <fieldset>
          <legend >Edit Profile</legend>
          <?php foreach ($data->result() as $r){?>
          <div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="email" class="form-control" name="email" id="email" value="<?= $r->email?>" placeholder="Enter your official Email" required>
							</div>
							<?php echo form_error('email', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Mobile No</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="text" class="form-control" name="mobile" id="mobile" value="<?= $r->mobile?>" placeholder="Enter Your Mobile No" required>
							</div>
						</div>
						<?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
					</div>
          <div class="form-group">
            <label for="about" class="cols-sm-2 control-label">About</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="about" id="about" class="form-control" placeholder="Enter Your Bio"><?= $r->about?></textarea>
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