<div class="container">
<br>
 <legend >Job List</legend>
 
 <div class="list-group">

<?php
        $uri = 'https://api.indeed.com/ads/apisearch?publisher=2849821278263879&q='.$_POST['job'].'&l='.$_POST['loc'].'%2C&format=json&sort=&radius=&st=&jt=&start=&limit=&fromage=&filter=&latlong=1&co=India&chnl=&userip=1.2.3.4&useragent=Mozilla/%2F4.0%28Firefox%29&v=2';
        $jsondata = file_get_contents($uri);
	$json = json_decode($jsondata, True);
	$len = count($json['results']);
?>
 <?php for($x = 0; $x<$len; $x++){?>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"><?=$json['results'][$x]['jobtitle']?></h5>
    <small></small>
    </div>
    <p class="mb-1"><?=$json['results'][$x]['source']?></p>
    <small><?=$json['results'][$x]['city']?></small>
    <button onclick="window.location.href='<?=$json['results'][$x]['url']?>'" type="button" class="btn btn-dark float-right">View More</button>
  </a>
  <?php }?>
</div>
</div>
