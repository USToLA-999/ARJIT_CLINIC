<?php include('header.php'); ?>
<?php include("login.php"); ?>
<?php include("signup.php"); ?> 
<!-- -->
<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex justify-content-evenly">
        <div class="container-fluid ">

            <a class="navbar-brand" href="#">Arjit HealthCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-center align-items-center" id="navbarNav">
                <ul class="navbar-nav text-center justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diagnosis.php">Diagnosis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php" tabindex="-1" aria-disabled="true">Contact_Us</a>
                    </li>
                </ul>

            </div>
            <form class="d-flex justify-content-evenly align-items-center">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success bg-success text-light" type="submit">Search</button>
                <button type="button" class="btn btn-outline-success text-light" data-bs-toggle="modal"
                    data-bs-target="#signupModal">SIGNUP</button>
                <button type="button" class="btn btn-outline-success text-light" data-bs-toggle="modal"
                    data-bs-target="#loginModal"> Login</button>
            </form>
        </div>
    </nav>
</div>
<?php include('dbcon.php'); ?>
<div class="backgrounttt">
        <div class="background">
            <div class="container pb-5">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-5 col-md-5 col-sm-12 justify-content-center align-items-center mx-auto mt-5">
                        <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center align-items-center mx-auto">
                            <div class="imageboxing">
                                <img src="about-img.jpg" alt="" width="100%" class=""  style="border-radius: 15px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 justify-content-center align-items-center mx-auto mt-5">
                        <div class="col-lg-10 col-md-10 col-sm-12 justify-content-center align-items-center mx-auto">
                            <div class="headlinesss mt-1">
                                <div class="aboutcontenthead">
                                    <div class="heads ">
                                        <h1>ABOUT US</h1>
                                    </div>
                                </div>
                                <p>
                                    Welcome to Healthcare Clinic, where we are dedicated to providing exceptional healthcare services. Our committed team of skilled professionals strives to prioritize your well-being through personalized and comprehensive medical care. With a focus on excellence, we offer a range of specialized services, including Cardiology, Pediatrics, Physiotherapy, and more. At  Healthcare Clinic, our mission is to deliver quality healthcare with compassion, ensuring your health journey is supported by expert guidance and advanced medical solutions. Trust us to be your partner in achieving and maintaining optimal health.
                                </p>
                                <div class="bookappoinment mt-2 ">
                                    <a href="tel:+" class="btn btn-primary btn-lg">Call Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center align-items-center mx-auto mt-5">
                        <div class="span12">
                            <?php include('content1.php'); ?>
                        </div>
                        <div class="span12">
                            <?php include('content2.php'); ?>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>
