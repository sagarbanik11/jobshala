<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ">
      <form class="form-horizontal" method="post" action="<?=site_url('japplication/save')?>" enctype="multipart/form-data">
        <br>
        <fieldset>
        <?php foreach ($qry->result() as $r){?>
          <legend >Application for <?= $r->role?></legend>
          <hr>
          <input name="jid" id="jid" value="<?= $r->j_id?>" hidden>
        <?php }?>
          <?php foreach ($data->result() as $r){?>
            <div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="name" id="name" value="<?= $_SESSION['name']?>"  required>
                </div>
                <?php echo form_error('email', '<div class="error">', '</div>'); ?>
              </div>
					</div>
          <div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="email" class="form-control" name="email" id="email" value="<?= $r->email?>"  required>
							</div>
							<?php echo form_error('email', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Mobile No</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="text" class="form-control" name="mobile" id="mobile" value="<?= $r->mobile?>" required>
							</div>
						</div>
						<?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
					</div>
          <div class="form-group">
            <label for="bio" class="cols-sm-2 control-label">Bio</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="bio" id="bio" class="form-control" ><?= $r->bio?></textarea>
              </div>
            </div>
          </div>		
          <div class="form-group">
            <label for="profession" class="cols-sm-2 control-label">Profession</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="profession" id="profession" value="<?= $r->profession?>"  required> 
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="cols-sm-2 control-label">Address</label>
            <div class="cols-sm-10">
              <div class="input-group">
              <textarea name="address" id="address" class="form-control" ><?= $r->address?></textarea>
              </div>
            </div>
          </div>		
          <div class="form-group">
            <label for="skills" class="cols-sm-2 control-label">Enter Skills <small>(separated by comma)</small></label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="skills" id="skills" value="<?= $r->skills?>"  >
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="hqualification" class="cols-sm-2 control-label">Higher Qualification</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="hqualification" id="hqualification" value="<?= $r->hqualification?>" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="institute" class="cols-sm-2 control-label">School/University</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="institute" id="institute" value="<?= $r->institute?>" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="stream" class="cols-sm-2 control-label">Stream</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="stream" id="stream" value="<?= $r->stream?>" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="passout" class="cols-sm-2 control-label">Pass Out Year</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="date" class="form-control" name="passout" id="passout" value="<?= $r->passout?>"  >
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="marks" class="cols-sm-2 control-label">GPA/Percentage</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="marks" id="marks" value="<?= $r->marks?>" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="dob" class="cols-sm-2 control-label">DOB</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="date" class="form-control" name="dob" id="dob" value="<?= $r->dob?>"   required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="experience" class="cols-sm-2 control-label">Experience</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="experience" id="experience" value="<?= $r->experience?>" >
              </div>
            </div>
          </div>
          <div class="form-group">
						<label for="gender" class="cols-sm-2 control-label">Gender</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<select value="<?= $r->gender?>" id="gender" name="gender" class="custom-select" required>
									<option value="male" selected>Male</option>
									<option value="female">Female</option>
                  <option value="others">Others</option>
								</select>
							</div>
						</div>
					</div>
            <div class="form-group">
            <label for="website" class="cols-sm-2 control-label">LinkedIn Link</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="website" id="website" value="<?= $r->website?>"  required>
              </div>
            </div>
          </div>
          <?php }?>
          <div class="form-group ">
            <button type="submit" class="btn btn-block btn-info">Apply for the job</button>
          </div>
          <?php echo $this->session->flashdata('msg'); ?>
        </fieldset>
      </form>
    </div>
</div>
</div>