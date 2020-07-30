<div class="container">
    <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <?php foreach ($data->result() as $r){?>
       
        <b class="mb-1">Name</b>
        <p class="mb-1"><?= $r->name?></p>
        <b class="mb-1">Email</b>
        <p class="mb-1"><?= $r->email?></p>
        <b class="mb-1">Mobile</b>
        <p class="mb-1"><?= $r->mobile?></p>
        <b class="mb-1">Profession</b>
        <p class="mb-1"><?= $r->profession?></p>
        <b class="mb-1">Bio</b>
        <p class="mb-1"><?= $r->bio?></p>
        <b class="mb-1">Address</b>
        <p class="mb-1"><?= $r->address?></p>
        <b class="mb-1">Skills</b>
        <p class="mb-1"><?= $r->skills?></p>
        <b class="mb-1">Higher Qualifications</b>
        <p class="mb-1"><?= $r->hqualification?></p>
        <b class="mb-1">School/University</b>
        <p class="mb-1"><?= $r->institute?></p>
        <b class="mb-1">Stream</b>
        <p class="mb-1"><?= $r->stream?></p>
        <b class="mb-1">Passout Year</b>
        <p class="mb-1"><?= $r->passout?></p>
        <b class="mb-1">Marks</b>
        <p class="mb-1"><?= $r->marks?></p>
        <b class="mb-1">DOB</b>
        <p class="mb-1"><?= $r->dob?></p>
        <b class="mb-1">Gender</b>
        <p class="mb-1"><?= $r->gender?></p>
        <b class="mb-1">Website</b>
        <p class="mb-1"><?= $r->website?></p>
        <b class="mb-1">Application Date</b>
        <p class="mb-1"><?= $r->adate?></p>
        <b class="mb-1">Status</b>
            <?php if($r->jstatus==0):?>
            <p class="mb-1">Progress</p>
            <?php elseif($r->jstatus==1):?>
            <p class="mb-1">Selected</p>
            <?php elseif($r->jstatus==2):?>
            <p class="mb-1">Rejected</p>
        <?php endif?>
        <?php }?>
      
    </a>
    </div>
    <?php if ($this->session->userdata['authorization'] == 1):?>
        <form class="form-horizontal" action="<?=site_url('scapplication/status')?>" method="post"><br>

        <label for="status" class="cols-sm-2 control-label">Action</label>
        <input name="jobid" id="jobid" value='<?= $r->ja_id?>' hidden>	
            <div class="cols-sm-10">
                <div class="input-group" style="width: 50%;">
                    <select id="status" name="status" class="custom-select">
                        <option value="1">Selected</option>
                        <option value="2">Rejected</option>
                    </select>
                </div>
            </div>
        <br>
        <div class="form-group ">
        <button type="submit" onclick="return Validate()" class="btn btn-dark">Submit</button>
        </div>
        </form>
    <?php endif?>
</div>