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
	<title>Services | <?php echo(SiteTitle);?></title>

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
                        <h2 class="heading">Our Services</h2>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- Page Header Section -->
			
			<!-- Services Section -->
			<section class="services-section">
				<div class="container">
					<!-- Sec Title -->
					<div class="sec-title centered">
						<div class="title">INTELLIGENT DECISION MAKING</div>
                        <h1>Providing Best Services</h1>
                        <div class="separator"></div>
					</div>
					<div class="inner-column">
                        <div class="row clearfix">
                            
                            <!-- Service Block -->
                            <?php

                            $query = "SELECT * FROM services where status = 1";
                            $result = mysqli_query($conn, $query);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <div class="service-block-style-two col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box text-center bg-white">
                                    <div class="hidden-image" style="background-image: url('<?php echo $row['image']; ?>');"></div>
                                    
                                    <h5><a href="service-details.php"><?php echo $row['title']; ?></a></h5>
                                    <div class="text"><?php echo $row['description']; ?></div>
                                    <a href="service-details.php" class="read-more">
                                        <span><img src="../assets/images/services/arrow-right.png" alt="arrow"></span> Read More
                                    </a>
                                </div>
                            </div>
                            <?php
                                }
                            } else {
                                echo "0 results";
                            }

                            mysqli_close($conn);
                            ?>   
                        </div>
                    </div>
				</div>
			</section>
			<!-- End Services Section -->
			
			<!-- Main Footer -->
			<?php require ('components/footer.php') ?>
			
		</div>
		<!--End pagewrapper-->

		<!-- ScrollToTop Start -->
		<?php include ('components/scrolltotop.php') ?>
		<!-- ScrollToTop End -->

		<?php include ('components/script.php') ?>
		
	</body>

</html>