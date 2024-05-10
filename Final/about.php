<?php include ('helpers/variables.php') ?>
<?php include('helpers/config.php')?>

<!DOCTYPE html>
<html lang="en">
	
<head>
	<!-- Meta Tags -->
	<?php include ('components/meta.php')?>

	<!-- Favicon and touch Icons -->
	<?php include ('components/fevicon.php')?>

	<!-- Page Title -->
	<title>About Us |  <?php echo(SiteTitle);?></title>

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
                        <h2 class="heading">About Us</h2>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- Page Header Section -->
			
			<!-- Services Section -->
			<section>
				<div class="container">
					<!-- Sec Title -->
					<div class="sec-title">
						<div class="row">
							<div class="left-box col-lg-4">
								<div class="title">About Us</div>
								<h1>Welcoming you to <span>Consulting</span> Agency</h1>
							</div>
							<div class="right-box col-lg-7 offset-lg-1 ps-5">
							
							<?php
							include("helpers/config.php");

							// Fetch the data from the database
							$query = "SELECT longdescription FROM aboutus";
							$result = mysqli_query($conn, $query);

							if(mysqli_num_rows($result) > 0) {
							    // Output data of each row
							    while($row = mysqli_fetch_assoc($result)) {
							        echo '<div class="text mt-3">' . $row["longdescription"] . '</div>';
							    }
							} else {
   								 echo "No data found";
							}

							mysqli_close($conn);
							?>			
								<!-- <div class="text mt-0">Jackcerra is a full service business firm with record of winning many campaigns under the most challenging circumstances by consult team of experts consultants. We guide our client through difficult issue that bringing our insight and judgment to each situation.</div> -->
								<!-- <div class="text mt-3">Our innovative approaches create original solutions to our clients most complex domes multi jurisdictional deals and disputes. By thinking on behalf of our clients every day</div> -->
							</div>
						</div>
					</div>
                    <div class="about-image">
                        <!-- <img src="../assets/images/background/30.jpg" alt="img"> -->
                    </div>
				</div>
			</section>
			<!-- End Services Section -->
			
			<!-- Business Section -->
			<section class="business-section">
				<div class="image-layer" style="background-image: url(../assets/images/background/31.jpg)"></div>
				<div class="container">
					<!-- Upper Box -->
					<div class="upper-box">
						<div class="separator"></div>
						<h1>We <span>consult</span> our clients to <span>strengthen</span> decision making & understanding for their <span>businesses</span> and upcomming <span>ventures</span></h1>
					</div>
					<div class="inner-container">
                        <div class="video-post">
                            <div class="ytube-video">
                                <!-- <iframe id="ytvideo" src="https://www.youtube.com/embed/fEErySYqItI" allow="autoplay;" allowfullscreen=""></iframe> -->
                                <div class="post-content">
                                    <!-- <div class="ytplay-btn"><i class="fa fa-play"></i></div> -->
                                    <img src="../assets/images/background/32.jpg" alt="img">
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</section>
			<!-- End Business Section -->

            <!-- Team Section -->
			<section class="team-section pt-0">
				<div class="container">
					<div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title centered">
                            <div class="title">Our Team</div>
                            <h1>Meet Our Consultants</h1>
                            <div class="separator"></div>
                        </div>

                        <div class="row clearfix">
                            
                            <!-- Team Block -->
                            <div class="team-style-one col-lg-4 col-md-4 col-sm-6">
                                <div class="teambox">
                                    <img src="../assets/images/team/1.jpg" alt="img">
                                    <div class="teambox-inner">
                                        <div class="team-social">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                                <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                                <li class="linkedin"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="teambox-intro text-center">
                                            <h5>Jackson Miller</h5>
                                            <p>Consultant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Block -->
                            <div class="team-style-one col-lg-4 col-md-4 col-sm-6">
                                <div class="teambox">
                                    <img src="../assets/images/team/2.jpg" alt="img">
                                    <div class="teambox-inner">
                                        <div class="team-social">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                                <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                                <li class="linkedin"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="teambox-intro text-center">
                                            <h5>Soamson Doglus</h5>
                                            <p>Consultant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Block -->
                            <div class="team-style-one col-lg-4 col-md-4 col-sm-6">
                                <div class="teambox">
                                    <img src="../assets/images/team/3.jpg" alt="img">
                                    <div class="teambox-inner">
                                        <div class="team-social">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                                <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                                <li class="linkedin"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="teambox-intro text-center">
                                            <h5>Hazel Grace</h5>
                                            <p>Consultant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
				</div>
			</section>
			<!-- End Team Section -->
			
			<!-- Funfact Section -->
			<section class="funfact-section py-0" style="background-image: url('../assets/images/background/10.jpg');">
				<div class="container">
					
					<!-- Counter Box -->
					<div class="counter-box">
						<div class="row clearfix">
							<div class="counter-column col-lg-3 col-md-6 col-sm-6">
								<div class="counter"><span class="odometer" data-count="15"></span></div>
								<h6>Number Of Awards</h6>
							</div>
							<div class="counter-column col-lg-3 col-md-6 col-sm-6">
								<div class="counter"><span class="odometer" data-count="5"></span> stars</div>
								<h6>Ranked Company</h6>
							</div>
							<div class="counter-column col-lg-3 col-md-6 col-sm-6">
								<div class="counter"><span class="odometer" data-count="150"></span><i>+</i></div>
								<h6>Successful Campeigns</h6>
							</div>
							<div class="counter-column col-lg-3 col-md-6 col-sm-6">
								<div class="counter"><span class="odometer" data-count="40"></span><i>+</i></div>
								<h6>Ongoing Projects</h6>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- End Funfact Section -->
			
			<!-- Testimonial Section -->
			<section class="testimonial-section">
				<div class="container">
					<div class="row clearfix">
						
						<!-- Title Column -->
						<div class="title-column col-lg-4 col-md-12 col-sm-12 px-lg-0">
							<div class="inner-column">
								<!-- Sec Title -->
								<div class="sec-title">
									<div class="title">CLIENTS TESTIMONIAL</div>
									<h1>What our Clients <br> say about Us</h1>
									<div class="separator"></div>
								</div>
							</div>
						</div>
						
						<!-- Carousel Column -->
						<div class="carousel-column col-lg-8 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="testimonial-carousel owl-carousel owl-theme">
									
									<!-- Testimonial Block -->
									<div class="testimonial-block">
										<div class="inner-box">
											<div class="upper-box">
												<div class="rating">
													Rating &nbsp;
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
											</div>
											<div class="lower-box">
												<div class="author-box">
													<div class="box-inner">
														<div class="author-image">
															<span class="quote fa fa-quote-right"></span>
															<img src="../assets/images/resource/reviewer-1.png" alt="img" >
														</div>
														<strong>Trent Ballinger</strong>
														<span class="designation">CEO, Bizzbreak Inc.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Testimonial Block -->
									<div class="testimonial-block">
										<div class="inner-box">
											<div class="upper-box">
												<div class="rating">
													Rating &nbsp;
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
											</div>
											<div class="lower-box">
												<div class="author-box">
													<div class="box-inner">
														<div class="author-image">
															<span class="quote fa fa-quote-right"></span>
															<img src="../assets/images/resource/reviewer-2.png" alt="img" >
														</div>
														<strong>Kevin Miller</strong>
														<span class="designation">Manager, PPS</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Testimonial Block -->
									<div class="testimonial-block">
										<div class="inner-box">
											<div class="upper-box">
												<div class="rating">
													Rating &nbsp;
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
											</div>
											<div class="lower-box">
												<div class="author-box">
													<div class="box-inner">
														<div class="author-image">
															<span class="quote fa fa-quote-right"></span>
															<img src="../assets/images/resource/reviewer-3.png" alt="img" >
														</div>
														<strong>Trent Ballinger</strong>
														<span class="designation">CEO, Bizzbreak Inc.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Testimonial Block -->
									<div class="testimonial-block">
										<div class="inner-box">
											<div class="upper-box">
												<div class="rating">
													Rating &nbsp;
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
											</div>
											<div class="lower-box">
												<div class="author-box">
													<div class="box-inner">
														<div class="author-image">
															<span class="quote fa fa-quote-right"></span>
															<img src="../assets/images/resource/reviewer-4.png" alt="img" >
														</div>
														<strong>Kevin Miller</strong>
														<span class="designation">Manager, PPS</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Testimonial Block -->
									<div class="testimonial-block">
										<div class="inner-box">
											<div class="upper-box">
												<div class="rating">
													Rating &nbsp;
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
											</div>
											<div class="lower-box">
												<div class="author-box">
													<div class="box-inner">
														<div class="author-image">
															<span class="quote fa fa-quote-right"></span>
															<img src="../assets/images/resource/reviewer-5.png" alt="img" >
														</div>
														<strong>Trent Ballinger</strong>
														<span class="designation">CEO, Bizzbreak Inc.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Testimonial Block -->
									<div class="testimonial-block">
										<div class="inner-box">
											<div class="upper-box">
												<div class="rating">
													Rating &nbsp;
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="text">“It’s a delight that we got them as our consultant for our big product launch and campeign. They guided us through the journey.”</div>
											</div>
											<div class="lower-box">
												<div class="author-box">
													<div class="box-inner">
														<div class="author-image">
															<span class="quote fa fa-quote-right"></span>
															<img src="../assets/images/resource/reviewer-6.png" alt="img" >
														</div>
														<strong>Kevin Miller</strong>
														<span class="designation">Manager, PPS</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- End Testimonial Section -->
			
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