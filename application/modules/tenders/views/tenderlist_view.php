<?php
// API used for fetching latest tenders
$jsondata = file_get_contents('http://tenders-api.herokuapp.com/');
$json = json_decode($jsondata, True);
?>

<div class="container" style="margin-top:30px;">
    <legend>Tender List</legend>
    <div class="row">
        <?php for ($x = 0; $x <= 9; $x++) { ?>
            <div class="col-sm-12 col-lg-12 text-center">

                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title"><?= $json['tender'][$x] ?></h5>
                        <p class="card-text"><?= $json['organisation'][$x] ?></p>
                        <p class="card-text"><?= $json['tender_opening'][$x] ?></p>
                    </div>
                </div>
            </div>

        <?php } ?> <br>
        <div style="margin-top:50px">
        <center>
            <a href="https://eprocure.gov.in/cppp/latestactivetendersnew/cpppdata" target="_blank" class="btn btn-info">View More Active Tenders</a>
        </center>
        </div>
    </div>
</div>
