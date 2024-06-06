<?php include('header.php'); ?>
<?php include("login.php"); ?>
<?php include("signup.php"); ?> 
<!--navigation baars-->
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
<!-- main body-->
<?php include('dbcon.php'); ?>
<div class="container">
    <div class="mt-4 mb-3">
        <div class="row">
            <div class="span12">
                <?php include('banner.php'); ?>
            </div>
            <div class="span12 mt-2">
                <div class="caption_index ">we provide the best quality Treatment</div>
            </div>		
            <!-- photos banner -->
            <div class="span12">
                <?php include('thumbnail.php'); ?>
            </div>
            <div class="span12">
                <?php include('content1.php'); ?>
            </div>
            <div class="span12">
                <?php include('content2.php'); ?>	
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>

