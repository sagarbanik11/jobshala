<style>
    .x {
        color: #6610f2 !important;
    }
</style>

<div class="container emp-profile">
    <form method="post">
        <?php echo $this->session->flashdata('msg'); ?><br>
        <div class="row">
            <?php foreach ($data->result() as $r) { ?>
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="<?= site_url('assets/img/default-dp.png') ?>" height="150px" width="150px" class="img-fluid" alt="" />
                        <!-- Will be updated later -->
                        <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            <?= $r->name ?>
                        </h5>
                        <h6>
                            <?= $r->profession ?>
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 50px;">
                            <li class="nav-item">
                                <a class="nav-link x active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link x" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link x" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2">
                    <button onclick="window.location.href='<?php echo site_url(); ?>uprofile/editview'" type="button" class="btn btn-outline-secondary float-right">Edit Profile</button>
                </div>

        </div>



        <div class="row">
            <div class="col-md-4">
                <div class="profile-work ">
                    <p>Website</p>
                    <a href="<?= $r->website ?>">View <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a><br />
                    <p>Skills</p>
                    <?= $r->skills ?>

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->name ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->email ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->mobile ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Birth</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->dob ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->gender ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->profession ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php if ($r->experience == NULL) : echo "0";
                                    else : echo $r->experience . "years";
                                    endif  ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->address ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Biography</label><br />
                                <p><?= $r->bio ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Highest Qualification</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->hqualification ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>School/University</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->institute ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Stream</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->stream ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Graduation Date</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->passout ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>GPA/Percentage</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $r->marks ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </form>
    <a href="<?= site_url(); ?>uprofile/pdf" target="_blank" type="button" class="btn btn-info float-right" style="color:white">Export Porfolio <i class="fa fa-download" aria-hidden="true"></i></a>

</div>
<br><br>
<div class="container" style="width:100%">
    <div class="accordion" id="accordionExample">

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Tips on COVID-19
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    Losing a job is an unpleasant feeling; however, you need to move on as well. 
                    To begin with, ensure you’ve updated your resume and uploaded it on relevant job portals and have started reaching out to your contacts who can help you land another job. 
                    You can also use the time in between to upskill yourself, preferably using an affordable if not free online course or certification programme, for better job prospects. 
                    Meanwhile, also try to look for ways to monetise your skills and hobbies. 
                    These could be taking up freelancing projects or online tutoring among many other things.
                </div>
                <center class="mb-5">
                    <iframe width="700" height="500" src="https://www.youtube.com/embed/TVU4jEeZUvY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </center>
            </div>
        </div>
    </div>
</div>