<!DOCTYPE html>
<html>
	<head>
	<title> Hospital Compare Redux - About us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather|Merriweather+Sans' rel='stylesheet' type='text/css'>
	<link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="_/css/mystyle.css" rel="stylesheet" media="screen">
	</head>
	<body id="about">
		
		<section class="container">
			<?php include "_/components/php/header.php"; ?>
			<div class="content row">
				<section class ="main col col-lg-8">
					<h2>Main Navigation</h2>
					<?php include "_/components/php/drop_suggest.php"?>
						<p>Suggestions: <span id="zip_hint"></span></p>
					<?php include "_/components/php/fetch_hosp.php"?>>
				</section><!-- main navigation -->
				
				<section class ="main col col-lg-4">
					<h2>Side Navigation</h2>

				</section><!-- side navigation -->
			</div>
			<?php include "_/components/php/footer.php"; ?>
		</section><!-- containers -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
		<script src="_/js/bootstrap.js"></script>
		<script src="_/js/myscript.js"></script>
	</body>
</html>