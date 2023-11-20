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
	<title>Green Coffee - about us page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>User Manual</h1>
		</div>
		<div class="title2">
			<a href="home.php">home </a><span>/ about</span>
		</div> 
		<div class="about">
			<div class="row">
				<div class="img-box">
					<img src="img/login.png">
				</div>
				<div class="detail">
					<h1>For user to make any purchase they required to make an account and login.</h1>
				</div>
			</div>
            <div class="row">
				<div class="img-box">
					<img src="img/addtocart.png">
				</div>
				<div class="detail">
					<h1>Once user logged in, user can either add to wishlist or add to cart.</h1>
				</div>
			</div>
            <div class="row">
				<div class="img-box">
					<img src="img/billing.png">
				</div>
				<div class="detail">
					<h1>Inside payment page user need to fill the billing address.</h1>
				</div>
			</div>
		</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		let slides = document.querySelectorAll('.testimonial-item');
		let index = 0;

		function nextSlide(){
		    slides[index].classList.remove('active');
		    index = (index + 1) % slides.length;
		    slides[index].classList.add('active');
		}
		function prevSlide(){
		    slides[index].classList.remove('active');
		    index = (index - 1 + slides.length) % slides.length;
		    slides[index].classList.add('active');
		}
	</script>
	<?php include 'components/alert.php'; ?>
</body>
</html>