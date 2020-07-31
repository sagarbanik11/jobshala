<?php

	$jsondata = file_get_contents('http://tenders-api.herokuapp.com/');
	$json = json_decode($jsondata, True);
?>



<div class="container">
<legend >Tender List</legend>
    <div class="row">
    <?php for($x = 0; $x<=9; $x++){?>
                <div class="col-sm-12 col-lg-12 text-center">
                
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title"><?=$json['tender'][$x]?></h5>
                        <p class="card-text"><?=$json['organisation'][$x]?></p>
                        <p class="card-text"><?=$json['tender_opening'][$x]?></p>
                        
                        <button type="button" onclick="window.location.href='<?php echo site_url(); ?>/tenders'"  class="btn btn-dark">View More</button>
                    </div>
                </div>
            
            </div>
                
            <?php }?>
           
        </div>
        </div>

