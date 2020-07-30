<style>
#single-application{
    font-size: 14px;
}
</style>


<div class="container" style="margin-top:70px" id="single-application">
        <h5>Applicant's Details</h5><hr>
    <div class="row">
    <?php foreach ($data->result() as $r){?>

        <div class="col-md-6">
        <b class="mb-1">Name</b>
        <p class="mb-1"><?= $r->name?></p>
        <b class="mb-1">Email</b>
        <p class="mb-1"><?= $r->email?></p>
        <b class="mb-1">Mobile</b>
        <p class="mb-1"><?= $r->mobile?></p>
        <b class="mb-1">Profession</b>
        <p class="mb-1"><?= $r->profession?></p>
        <b class="mb-1">About Me</b>
        <p class="mb-1"><?= $r->bio?></p>
        <b class="mb-1">Address</b>
        <p class="mb-1"><?= $r->address?></p>
        <b class="mb-1">Skills</b>
        <p class="mb-1"><?= $r->skills?></p>


        </div>
        <div class="col-md-6">
        <b class="mb-1">Highest Qualifications</b>
        <p class="mb-1"><?= $r->hqualification?></p>
        <b class="mb-1">School/University</b>
        <p class="mb-1"><?= $r->institute?></p>
        <b class="mb-1">Stream</b>
        <p class="mb-1"><?= $r->stream?></p>
        <b class="mb-1">Passout Year</b>
        <p class="mb-1"><?= $r->passout?></p>
        <b class="mb-1">Marks</b>
        <p class="mb-1"><?= $r->marks?></p>
        <b class="mb-1">Date of Birth</b>
        <p class="mb-1"><?= $r->dob?></p>
        <b class="mb-1">Gender</b>
        <p class="mb-1"><?= $r->gender?></p>
        <b class="mb-1">Website</b>
        <p class="mb-1"><a href="<?= $r->website?>" target="_blank">Click here to view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></p>
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
        </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-6 offset-md-4">
    <?php if ($this->session->userdata['authorization'] == 1):?>
        <form class="form-horizontal" action="<?=site_url('scapplication/status')?>" method="post"><br>

        <label for="status" class="cols-sm-2 control-label">Change Status</label>
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
        <button type="submit" onclick="return Validate()" class="btn  btn-info">Submit</button>
        </div>
        </form>
    <?php endif?>
    </div>
    </div>

   
</div>