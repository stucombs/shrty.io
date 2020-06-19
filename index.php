<? session_start(); ?>
<!DOCTYPE html>
<?php
	// require('./required/connection.php');
	$currentPage = 'home';
	$title = 'shrty.io Home';
?>
<html>
	<header>
		<title id="page_title"><? echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="bootstrap-4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="./bootstrap-4/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/application.css" />
	</header>
	<body>
		<div class="container-fluid">
			<? require('includes/header.php'); ?>
			<div id="body-div-row" class="row body-main">
				<div class="col-12-xs body-text">
					<div class="body-text-top">shrty.io helps you create and manage URLs. Enter your url below to create a new link now.</div>
					<form method="get" action="./files/application/generateurl.php">
						<input type='text' class="url-input" placeholder="Enter URL.." /><br /><br />
						<button type="submit" class='btn btn-primary btn-lg'>&nbsp;&nbsp;Create&nbsp;&nbsp;</button>
						<br /><br/ ><button type="button" onClick=<? session_destroy(); ?>>DESTROY SESSION</button>
					</form>
					<br /><br /> <br />
					<div><h3>How It Works</h3></div>
					<p>
						Shrty.io will help you create and manage lengthy URLs for easy, concise sharing. Enter a URL into the generator above and Shrty will create a shortened URL which you can share, visit and manage all the same as you would with the full URL. 
						Shrty stores URLs securely and all shortened URLs are created with security protocols that fit todays standards. Create a shortened URL, copy, paste and go or create an account to keep a list off all of your generated URLs.
					 </p>
					 <p><? $result = isset($_SESSION) ? $_SESSION['temp_url']['result'] : ''; print_r($result); ?></p>
				</div>
			</div>
			<?php require("includes/footer.php"); ?>
		</div>
	</body>
	<script src="js/application.js"></script>
</html>