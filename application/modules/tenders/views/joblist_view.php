<div class="container">
<br>
 <legend >Job List</legend>
 
 <div class="list-group">

<?php

	$jsondata = file_get_contents('http://tenders-api.herokuapp.com/');
	$json = json_decode($jsondata, True);
?>
 <?php for($x = 0; $x<=5; $x++){?>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"><?=substr($json['tender'][$x], 0, -40)?>...</h5>
      <small><?=substr($json['tender_opening'][$x], 0, -9)?></small>
    </div>
    <p class="mb-1"><?=$json['organisation'][$x]?></p>
    <small></small>
    <button type="button" class="btn btn-dark float-right">View More</button>
  </a>
  <?php }?>
</div>
</div>
