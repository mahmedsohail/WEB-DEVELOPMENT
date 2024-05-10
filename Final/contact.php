<?php include ('helpers/variables.php') ?>


<!DOCTYPE html>
<html lang="en">
	
<head>
	<!-- Meta Tags -->
	<?php include ('components/meta.php')?>

	<!-- Favicon and touch Icons -->
	<?php include ('components/fevicon.php')?>

	<!-- Page Title -->
	<title>Contact us |  <?php echo(SiteTitle);?></title>

	<!-- Stylesheets -->
	<?php include ('components/links.php')?>
	
</head>

	<body class="business">

		<div class="page-wrapper">
			
			<!-- Preloader -->
			<?php require ('components/preloader.php') ?> 
			
			<!-- Main Header -->
			<?php require ('components/header.php') ?>
			<!-- End Main Header -->
			
			<!-- Page Header Section -->
			<div class="page_header">
                <div class="page_header_content">
                    <div class="container">
                        <h2 class="heading">Contact Us</h2>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- Page Header Section -->			
			
			<!-- News Section -->
			<section class="contact-section">
				<div class="container">

					<div class="row">                            
						<div class="col-lg-4 col-md-6">
							<div class="contact-box">
								<div class="box-image">
									<img src="./assets/images/resource/contact-1.jpg" alt="">
								</div>
								<div class="contact-box-inner">
									<div class="image">
										<img src="https://wpthemebooster.com/demo/themeforest/html/jackcerra/assets/images/resource/mail.svg" alt="service">
									</div>
									<div class="content">
										<h5>Send Us Mail</h5>
										<p><a href="mailto:jackcerra.care@email.com">jackcerra.care@email.com</a></p>
										<p><a href="mailto:info.jackcerra@email.com">info.jackcerra@email.com</a></p>
									</div>
								</div>
							</div>
						</div>                            
						<div class="col-lg-4 col-md-6">
							<div class="contact-box">
								<div class="box-image">
									<img src="../assets/images/resource/contact-2.jpg" alt="">
								</div>
								<div class="contact-box-inner">
									<div class="image">
										<img src="https://wpthemebooster.com/demo/themeforest/html/jackcerra/assets/images/resource/phone.svg" alt="service">
									</div>
									<div class="content">
										<h5>Call Us Anytime No</h5>
										<p>(+987) 654 321 228 11</p>
										<p>(+987) 654 321 228 14</p>
									</div>
								</div>
							</div>
						</div>                          
						<div class="col-lg-4 col-md-12">
							<div class="contact-box">
								<div class="box-image">
									<img src="../assets/images/resource/contact-3.jpg" alt="">
								</div>
								<div class="contact-box-inner">
									<div class="image">
										<img src="https://wpthemebooster.com/demo/themeforest/html/jackcerra/assets/images/resource/map-pin.svg" alt="service">
									</div>
									<div class="content">
										<h5>Visit Our Office</h5>
										<p>28 Street, New York City United States of America</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="contact-form default-form">
						<div class="row">
							<div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
								<form method="post" action="contact-script.php">
									<div class="sec-title centered">
										<h1>Drop Us A Line</h1>
										<p>Jackcerra Inc will arrange your first business consultation totally free of cost</p>
										<div class="separator"></div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="fullName" class="form-control" placeholder="Name*" required="">
											</div>
										</div>
										<!-- <div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="lName" class="form-control" placeholder="Last Name*">
											</div>
										</div> -->
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Email Address*" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" class="form-control" placeholder="Phone No">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="city" class="form-control" placeholder="City">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="companyName" class="form-control" placeholder="Company Name">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" class="form-control" placeholder="Message Here*" required=""></textarea>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group text-center">
												<input class="btn-submit" type="submit" value="Send Mail" name="submit">
											</div>
										</div>
									</div>
									
								</form>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- End News Section -->
			
			<!-- Main Footer -->
			<?php require ('components/footer.php') ?>
			
		</div>
		<!--End pagewrapper-->

		<!-- ScrollToTop Start -->
		<?php include ('components/script.php') ?>
		<!-- ScrollToTop End -->
		
		<?php include ('components/script.php') ?>
		
	</body>

</html>