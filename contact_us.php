<?php include('header.php');?>
<?php include("login.php"); ?>
<?php include("signup.php"); ?> 
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
<div class="valuescontent">
        <div class="background">
            <div class="container pt-5 pb-5">
                <div class="row justify-content-center align-items-center mt-5 mb-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center align-items-center mx-auto text-dark">
                        <div class="col-lg-10 col-md-10 col-sm-10 mx-auto justify-content-center align-items-center backki pt-5 pb-5">
                            <div class="contactbox ">
                                <div class="headline text-center">
                                    <h1><u> HealthCare Clinic</u></h1>
                                </div>
                                <div class="more-info">
                                    <ul class="list-ico">
                                      <li><span class="Address">ADDRESS :-</span> West, beside The tooth clinic, Block A1B, Part B, Janakpuri, New Delhi, Delhi, 110058</li>
                                      <li><span class="phoneno">PHONE NO :-</span> 0000000000</li>
                                      <li><span class="email">E-MAIL :-</span> arjitheatcare@gmail.com</li>
                                      <li>
                                        <div class="bookappoinment mt-0 ">
                                            <a href="tel:+919810291391" class="btn btn-primary btn-lg">Call Now</a>
                                        </div>
                                      </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center align-items-center mx-auto mt-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 mx-auto justify-content-center align-items-center mx-auto text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d881.7431413002163!2d78.07238258838669!3d27.872113097596344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974a37d8ef7168f%3A0x8efe0fc10166dfc5!2sHospital%20aligarh!5e0!3m2!1sen!2sin!4v1717686881948!5m2!1sen!2sin" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include('footer.php') ?>

