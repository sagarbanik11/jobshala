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
        <b class="mb-1">Sector</b>
        <p class="mb-1"><?= $r->sector?></p>
        <b class="mb-1">Industry</b>
        <p class="mb-1"><?= $r->industry?></p>
        <b class="mb-1">Status</b>
            <?php if($r->status==0):?>
            <p class="mb-1">Pending</p>
            <?php elseif($r->status==1):?>
            <p class="mb-1">Approved</p>
            <?php elseif($r->status==2):?>
            <p class="mb-1">Declined</p>
        <?php endif?>
  
      
    </a>
    </div>
        <form class="form-horizontal" action="<?=site_url('admin/mentorstatus')?>" method="post"><br>
        <input name="uid" id="uid" value='<?= $r->u_id?>' hidden>	
        <label for="status" class="cols-sm-2 control-label">Action</label>
    
            <div class="cols-sm-10">
                <div class="input-group" style="width: 50%;">
                    <select id="status" name="status" class="custom-select">
                        <option value="1">Approved</option>
                        <option value="2">Declined</option>
                    </select>
                </div>
            </div>
        <br>
        <div class="form-group ">
        <button type="submit" onclick="return Validate()" class="btn btn-dark">Submit</button>
        </div>
        </form>
        <?php }?>
</div>

