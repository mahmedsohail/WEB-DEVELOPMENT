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
	<title>Team |  <?php echo(SiteTitle);?></title>

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
                        <h2 class="heading">Our Team</h2>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Team</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- Page Header Section -->
			
			<!-- Team Section -->
			<section class="team-section">
				<div class="container">
					<div class="inner-column">
                        <div class="row clearfix">
                            
                            <!-- Fetch team data from database -->
                            <?php
                            $query = "SELECT * FROM teams where status = 1";
                            $result = mysqli_query($conn, $query);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <!-- Team Block -->
                            <div class="team-style-one col-lg-4 col-md-4 col-sm-6">
                                <div class="teambox">
                                    <img src="<?php echo $row['image']; ?>" alt="Team Member Image">
                                    <div class="teambox-inner">
                                        <div class="team-social">
                                            <ul>
                                                <li class="facebook"><a href="<?php echo $row['facebook']; ?>"><i class="bi bi-facebook"></i></a></li>
                                                <li class="twitter"><a href="<?php echo $row['twitter']; ?>"><i class="bi bi-twitter"></i></a></li>
                                                <li class="instagram"><a href="<?php echo $row['instagram']; ?>"><i class="bi bi-instagram"></i></a></li>
                                                <li class="linkedin"><a href="<?php echo $row['linkedin']; ?>"><i class="bi bi-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="teambox-intro text-center">
                                            <h5><?php echo $row['name']; ?></h5>
                                            <p><?php echo $row['designation']; ?></p>
                                        </div>
                                    </div>
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
		<?php include ('components/script.php') ?>
		<!-- ScrollToTop End -->
       
		<?php include ('components/script.php') ?>

	</body>

</html>