<style>
    #mentor-card {
        border-radius: 8px;
        -webkit-box-shadow: 3px 10px 44px 0px rgba(222, 222, 222, 1);
        -moz-box-shadow: 3px 10px 44px 0px rgba(222, 222, 222, 1);
        box-shadow: 3px 10px 44px 0px rgba(222, 222, 222, 1);
        margin: 0px auto !important;
    }

    .card-body {
        padding: 50px 70px 50px 50px;

    }

    .card-header,
    .card-title {
        font-weight: 600;
    }
    #qr-code{
        margin-top:120px !important;
    }
    #bold-head{
        font-weight: 600;
    }
</style>
<div class="container align-middle" style="margin-top:95px;">
    <div class="card mb-3" id="mentor-card" style="max-width: 569px;">
        <?php foreach ($data->result() as $r) { ?>

            <div class="row no-gutters">
            <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 600;">Amples Skill Development</h5>
                        <hr>
                        <p class="card-text" style="font-weight: 500;font-size: 14px;">
                            <span id="bold-head">Name: </span><span><?= $_SESSION['name'] ?></span>
                        </p>

                        <p class="card-text" style="font-weight: 500;font-size: 14px;">
                            <span id="bold-head">Email: </span><?= $r->email ?>
                        </p>
                        <p class="card-text" style="font-weight: 500;font-size: 14px;">
                            <span id="bold-head">Mobile: </span><?= $r->mobile ?>
                        </p>
                        <p class="card-text" style="font-weight: 500;font-size: 14px;">
                            <span id="bold-head">Expert in: </span><?= $r->skname ?>
                        </p>
                        </p>
                        <p class="card-text" style="font-weight: 500;font-size: 14px;">
                            <span id="bold-head">Bio: </span><?= $r->about ?>
                        </p>
                        </p>
                        <p class="card-text" style="font-weight: 500;font-size: 14px;">
                            <span id="bold-head">Website: </span><a href="<?= $r->website ?>">View Profile&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="qr-code"></div>

                </div>

            </div>
    </div>
    <br>
    <center>
        <button onclick="window.location.href='<?php echo site_url(); ?>mprofile/editprofile'" type="button" class="btn btn-outline-info">Edit Profile</button>

    </center>

</div>
<script src="<?php site_url(); ?>assets/js/qrcode.js"></script>
<script type="text/javascript">
                        new QRCode("qr-code", {
                            text: "<?=$r->website?>",
                            width: 140,
                            height: 140,
                            colorDark: "#000000",
                            colorLight: "#ffffff",
                            correctLevel: QRCode.CorrectLevel.H
                        });
                    </script>

<?php } ?>
