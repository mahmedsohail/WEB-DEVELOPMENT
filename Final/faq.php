<?php include ('helpers/variables.php')?>
<?php include('helpers/config.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <?php include ('components/meta.php')?>

    <!-- Favicon and touch Icons -->
    <?php include ('components/fevicon.php')?>

    <!-- Page Title -->
    <title>FAQ | <?php echo(SiteTitle);?></title>

    <!-- Stylesheets -->
    <?php include ('components/links.php')?>
    
</head>

<body class="business">

    <div class="page-wrapper">

        <!-- Preloader -->
        <?php require ('components/preloader.php') ?>

        <!-- Main Header -->
        <?php  require ('components/header.php') ?>
        <!-- End Main Header -->

        <!-- Page Header Section -->
        <div class="page_header">
            <div class="page_header_content">
                <div class="container">
                    <h2 class="heading">FAQ</h2>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Section -->

        <!-- Accordion Section -->
        <section class="accordion-section pb-0" style="background-image: url('../assets/images/background/17.jpg');">
            <div class="container">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title centered">
                        <div class="title">Ask What You Want To Know</div>
                        <h1>Frequently Asked Questions</h1>
                        <div class="separator"></div>
                    </div>
                    <div class="row clearfix">

                        <!-- Image Block -->
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="care-imagebox">
                                <img src="../assets/images/resource/care.png" alt="img">
                            </div>
                        </div>

                        <!-- Accordion Block -->
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="accordion accordion-default" id="accordionFaq">
                                <?php
                                // Fetch data from faq table
                                $sql = "SELECT * FROM faq WHERE status = 1";
                                $result = $conn->query($sql);

                                // Display faq data dynamically
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $row['id']; ?>" aria-expanded="false">
                                            <?php echo $row['question']; ?>
                                            <span class="accordion-tab-icon">
                                                <i class="open-icon bi bi-plus"></i>
                                                <i class="close-icon bi bi-dash"></i>
                                            </span>
                                        </button>
                                    </h2>
                                    <div class="accordion-collapse collapse" data-bs-parent="#accordionFaq"
                                        id="collapse<?php echo $row['id']; ?>">
                                        <div class="accordion-body">
                                            <?php echo $row['answer']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- End Services Section -->

        <!-- Main Footer -->
        <?php require("components/footer.php") ?>

    </div>
    <!--End pagewrapper-->

    <!-- ScrollToTop Start -->
    <?php include ('components/script.php') ?>
    <!-- ScrollToTop End -->

    <?php include ('components/script.php') ?>

</body>

</html>