<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/favicon.svg" type="image/x-icon">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" media="screen,projection" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Verification Pending</title>
	<style>
		#verification-text {
			margin:0px auto;
			margin-top:100px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="alert alert-danger" role="alert" id="verification-text">
			Verification Pending for your organisation.
		</div>
		<div class="col-md-12">
		<a class="nav-item nav-link active" href="<?php echo site_url(); ?>login"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go Back</a>
		</div>
	</div>
</body>

</html>