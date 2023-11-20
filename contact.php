<?php 
 include 'components/connection.php';
 session_start();
 if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = '';
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		header("location: login.php");
	}
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Green Coffee - home page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>contact us</h1>
		</div>
		<div class="title2">
			<a href="home.php">home </a><span>/ contact us</span>
		</div>
		<div class="address">
			 	<div class="title">
			 		<img src="img/bean.png" class="logo">
			 		<h1>contact detail</h1>
			 		<p>Have Any Question? Reach Us Out! </p>
			 	</div>
			 	<div class="box-container">
			 		<div class="box">
			 			<i class="bx bxs-map-pin"></i>
			 			<div>
			 				<h4>address</h4>
			 				<p>No 48 Jalan 8/27C, Seksyen 8, Bangi</p>
			 			</div>
			 		</div>
			 		<div class="box">
			 			<i class="bx bxs-phone-call"></i>
			 			<div>
			 				<h4>phone number</h4>
			 				<p>019-3085056</p>
			 			</div>
			 		</div>
			 		<div class="box">
			 			<i class="bx bxs-map-pin"></i>
			 			<div>
			 				<h4>email</h4>
			 				<p>shafiqrashdi@gmail.com</p>
			 			</div>
			 		</div>
			 	</div>
			</div>
		<div class="form-container">
			 <form method="post">
			 	<div class="title">
			 		<img src="img/bean.png" class="logo">
			 		<h1>Our Location</h1>
			 	</div>
				 <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.491864498249!2d101.76549771116976!3d2.966609817532887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcbc5a33ee9e9%3A0xc
					106b6437e1dc08b!2s48%2C%20Jalan%208%2F27c%2C%20Seksyen%208%2C%2043650%20Bandar%20Baru%20Bangi%2C%20Selangor!5e0!3m2!1sen!2smy!4v1675241662841!5m2!1sen!2smy" width="730" height="600"
					style="border-color: #87a243;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
			 </form>
			 
		</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html>