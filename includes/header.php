<?php
include('config/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DollarPay</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="Uploads/logo/logo1.png" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Plugin css -->
	<link rel="stylesheet" href="assets/css/plugin.css">
	<!-- Flaticon -->
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<!-- stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/dark.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->

	<!-- JavaScript to hide preloader after 1 second -->
	<script>
		// Wait for the DOM to be fully loaded
		document.addEventListener("DOMContentLoaded", function() {
			// Set timeout to hide preloader after 1000ms (1 second)
			setTimeout(function() {
				document.getElementById("preloader").style.display = "none";
			}, 1000);
		});
	</script>
</body>

</html>
