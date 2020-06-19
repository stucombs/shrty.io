<?php
	DEFINE('DIR', '../../');
	// require(DIR . 'required/connection.php');
	$currentPage = 'contact';
	$title = 'shrty.io Contact';
	$session = session_start();
?>
<!DOCTYPE html>
<html>
	<header>
		<title id="page_title"><?echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<?php echo '<script="' . DIR . 'bootstrap-4/js/bootstrap.min.js"></script>'; ?>
		<?php echo '<link rel="stylesheet" href="' . DIR . 'bootstrap-4/css/bootstrap.min.css">' ?>
		<?php echo '<link rel="stylesheet" href="' . DIR . 'css/application.css" />' ?>
	</header>
	<body>
		<div class="container-fluid">
		<?php require(DIR . 'includes/header.php'); ?>
			<div id="body-div-row" class="row body-main">
				<div class="col-12-xs">
					CONTACT
				</div>
			</div>
			<?php require(DIR . 'includes/footer.php'); ?>
		</div>
	</body>
	<?php echo '<script src="' . DIR . 'js/application.js"></script>'; ?>
</html>