<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include("Includes/head.php"); ?>
	<title>Home - Bloggy</title>
	<link href="styles/index.css" rel="stylesheet">
    </head>
    <body>
	<?php include("Includes/nav.php"); ?>

	<div class='container main-content'>
	    <div class="row">
		<div class="col-sm-9 posts">
		    <div class='post'>
			<h2 class='post-title'>Love You Alvin</h2>

		    </div>
		    <div class='post'>
			<h2 class='post-title'>Hello World</h2>

		    </div>
		</div>
		<div class="col-sm-3">
		    <div class=''>

		    </div>
		</div>
	    </div>
	</div>

	<?php include("Includes/footer.php"); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>');</script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	    $(document).ready(function () {
		$(".left:nth-child(1)").addClass("active");
		$(".container").delay(200).animate({opacity: 1}, 300);
	    });
	</script>
    </body>
</html>
