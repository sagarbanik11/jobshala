<?php $this->db->select('*');
$this->db->from('uprofile');
$this->db->join('user', 'user.u_id= uprofile.u_id');
$this->db->where('uprofile.u_id', $this->session->userdata('u_id'));
$data = $this->db->get();

?>

<title>Portfolio | <?= $_SESSION['name'] ?></title>
<link rel="shortcut icon" href="<?= site_url(); ?>assets/img/favicon.svg" type="image/x-icon">

<div class="container emp-profile portfolio">
    <div class="row">
        <?php foreach ($data->result() as $r) { ?>
    </div>

    <div class="col-md-12" style="border-bottom: solid 0.5px black;">
        <h1 style="text-align: left;
                    text-transform: uppercase;
                    opacity:0.85;
                    font-weight: 600;">
            <?= $r->name ?>
        </h1>

    </div>
    <div class="col-md-12" style="margin-top:3px;">
        <div style="float: left;font-size:11px">
            <span>Email: <i><?= $r->email ?></i></span>
        </div>
        <div style="float: right;font-size:11px">
            <span>Mobile: <?= $r->mobile ?></span>
        </div>
    </div>

</div>



<div class="col-md-4">
    <div class="profile-work" style="margin-top:10px">
        <p style="font-size:12px;font-weight: 600;">ABOUT ME</p>
        <p style="margin-top: -10px!important;"><span><?php if ($r->bio == NULL) : echo "";
                    else : echo $r->bio;
                    endif ?></span>

            <p style="font-size:12px;font-weight: 600;">EDUCATION</p>
            <p  style="margin-top: -10px!important;"><span><?php if ($r->institute == NULL) : echo "";
                        else : echo "University: " . $r->institute;
                        endif ?></span>
                <span style="text-align:right;float:right;">
                    <?php if ($r->marks == NULL) : echo "";
                    else : echo "Grade: " . $r->marks;
                    endif ?></span>
            </p>
            <p style="margin-top: -10px!important;">
                <?php if ($r->hqualification == NULL) : echo "";
                else : echo "Studied " . $r->hqualification;
                endif ?></span>

                <span style="text-align:right;float:right;font-style: italic;font-size:12px;">
                    <?php if ($r->passout == NULL) : echo "";
                    else : echo "Graduated On: " . $r->passout;
                    endif ?></span>
            </p>
            
        </p>
        <p style="font-size:12px;font-weight: 600;">EXPERIENCE</p>

        <p style="margin-top: -10px!important;">
                <?php if ($r->profession == NULL) : echo "";
                else : echo "I am currently a " . $r->profession;
                endif ?></span>

                <span style="text-align:right;float:right;font-style: italic;font-size:12px;">
                    <?php if ($r->experience == NULL || $r->experience == 0) : echo "";
                    else : echo "Have an experience for " . $r->experience. " years";
                    endif ?></span>
        </p>

        <p style="font-size:12px;font-weight: 600;">SKILLS</p>

        <p style="margin-top: -10px!important;">
                <?php if ($r->skills == NULL) : echo "";
                else : echo "Familiar with " . $r->skills;
                endif ?></span>
        </p>

    </div>
</div>

<?php } ?>
</div>

</div>