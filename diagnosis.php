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
<div class="maincontainerbodypart">
    <div class="maincontainerbody">
        <div class="container pt-5 pb-5 justify-content-center align-items-center">
            <div class="headingline text-center">
                <h3>PHYSIOTHERAPY</h3>
            </div>
            <div class="row   justify-content-center align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-12 justify-content-center align-items-center mx-auto">
                    <div class="col-lg-10 col-md-10 col-sm-10 justify-content-center align-items-center mx-auto ">
                        <img src="physiotherapyrealimage2.png" alt="" width="100%" class="  bordering1">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 justify-content-center align-items-center mx-auto containent">
                    <div class="col-lg-10 col-md-10 col-sm-10 justify-content-center align-items-center mx-auto mt-2 ">
                        <div class="contentline mt-2">
                            <p class="text-light">
                                Healthcare Clinic takes pride in delivering top-notch Physiotherapy services to enhance
                                your well-being. Our skilled and compassionate physiotherapists focus on personalized
                                care, utilizing advanced techniques and equipment for effective rehabilitation. From
                                musculoskeletal issues to post-injury recovery, we tailor treatment plans to your unique
                                needs. At Healthcare Clinic, your health and mobility are our foremost priorities.
                                Experience the difference in our commitment to providing exceptional physiotherapy
                                services, ensuring you achieve optimal physical function and a better quality of life.
                                Trust us for compassionate care and effective rehabilitation at every step of your
                                journey.
                            </p>
                            <p class="mt-5 h5 text-light">
                                TIMING
                            </p>
                            <p class="mt-3 text-light">
                                9:00am to 7:30pm
                            </p>
                        </div>
                        <div class="bookappoinment mt-0 ">
                            <a href="tel:+919315172018" class="btn btn-primary btn-lg">Call for Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 127">
            <path fill="#F8F9FA" fill-opacity="1"
                d="M0,128L48,112C96,96,192,64,288,42.7C384,21,480,11,576,21.3C672,32,768,64,864,64C960,64,1056,32,1152,21.3C1248,11,1344,21,1392,26.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
</div>
<div class="dentalsurgencontainerbox">
    <div class="background">
        <div class="container pt-5 pb-5   justify-content-center align-items-center">
            <div class="headingline text-center">
                <h3>DENTAL SURGEON</h3>
            </div>
            <div class="row mt-5  justify-content-center align-items-center">
                <div class="col-lg-7 col-md-7 col-sm-12 justify-content-center align-items-center mx-auto ">
                    <div class="col-lg-10 col-md-10 col-sm-10 justify-content-center align-items-center mx-auto mt-3 ">
                        <div class="contentline mt-2">
                            <p class="">
                                HEALTHCARE Clinic is proud to offer expert Dental Surgeon services, ensuring
                                comprehensive oral care for our patients. Our skilled team of dental surgeons employs
                                advanced techniques and state-of-the-art equipment to address a wide range of dental
                                issues. From routine procedures to complex surgeries, we prioritize patient comfort and
                                well-being. Whether you require extractions, implants, or oral surgeries, trust
                                Healthcare Clinic for precise and compassionate dental care. Your oral health is our
                                commitment, and we strive to provide excellence in every aspect of our Dental Surgeon
                                services.
                            </p>
                            <p class="mt-2 h5 ">
                                TIMING
                            </p>
                            <p class="mt-2 ">
                                10:00am to 8:00pm
                            </p>
                        </div>
                        <div class="bookappoinmentt mt-0 ">
                            <a href="tel:+919315172018" class="btn btn-primary btn-lg">Call for Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 justify-content-center align-items-center mx-auto">
                    <div class="col-lg-10 col-md-10 col-sm-10 justify-content-center align-items-center mx-auto ">
                        <img src="dentalcare.jpg" alt="" width="100%" class="bordering2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pediatrationbox">
    <div class="background">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1430 125">
            <path fill="#F8F9FA" fill-opacity="1"
                d="M0,128L48,112C96,96,192,64,288,42.7C384,21,480,11,576,21.3C672,32,768,64,864,64C960,64,1056,32,1152,21.3C1248,11,1344,21,1392,26.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container justify-content-center align-content-center ">
            <div class="headingline text-center">
                <h3>PEDIATRIC CARE</h3>
            </div>
            <div class="row justify-content-center align-items-center  pb-5">
                <div class="col-lg-5 col-md-5 col-sm-12 justify-content-center align-items-center mx-auto mt-5 imbox">
                    <div class="col-lg-10 col-md-10 col-sm-12 justify-content-center align-items-center mx-auto">
                        <div class="imagebox">
                            <img src="pedi.jpg" alt="" width="100%" class=" bordering3">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 align-items-center justify-content-center mx-auto contentlines">
                    <div class="col-lg-10 col-md-10 col-sm-12 justify-content-center align-items-center mx-auto">
                        <div class="content mt-2">
                            <p class="">
                                Healthcare Clinic is dedicated to providing exceptional Pediatric Care services,
                                ensuring the health and well-being of your little ones. Our experienced pediatricians
                                offer comprehensive check-ups, vaccinations, and expert guidance for every stage of your
                                child's development. With a focus on preventive care and early intervention, Healthcare
                                Clinic is committed to nurturing the health of your family. Trust us for compassionate
                                and thorough pediatric services, where the growth and happiness of your child are our
                                top priorities. Experience excellence in Pediatric Care at Healthcare Clinic, your
                                partner in family health.
                            </p>
                            <p class="mt-2 h5 ">
                                TIMING
                            </p>
                            <p class="mt-2 ">
                                11:00am to 5:00pm
                            </p>
                        </div>
                        <div class="bookappoinmentt mt-0 ">
                            <a href="tel:+919315172018" class="btn btn-primary btn-lg">Call for Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 266">
    <path fill="#C4D8E4" fill-opacity="1"
        d="M0,192L18.5,192C36.9,192,74,192,111,186.7C147.7,181,185,171,222,181.3C258.5,192,295,224,332,245.3C369.2,267,406,277,443,250.7C480,224,517,160,554,165.3C590.8,171,628,245,665,245.3C701.5,245,738,171,775,122.7C812.3,75,849,53,886,53.3C923.1,53,960,75,997,101.3C1033.8,128,1071,160,1108,149.3C1144.6,139,1182,85,1218,85.3C1255.4,85,1292,139,1329,176C1366.2,213,1403,235,1422,245.3L1440,256L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z">
    </path>
</svg>
<div class="cardiologistbox">
    <div class="innerbox">
        <div class="background">
            <div class="container pt-5 pb-5">
                <div class="headingline text-center">
                    <h3>CARDIOLOGY</h3>
                </div>
                <div class="row justify-content-center align-items-center  pb-5">
                    <div
                        class="col-lg-7 col-md-7 col-sm-12 align-items-center justify-content-center mx-auto contentlines">
                        <div class="col-lg-10 col-md-10 col-sm-12 justify-content-center align-items-center mx-auto">
                            <div class="content mt-2">
                                <p class="">
                                    Healthcare Clinic is honored to provide specialized Cardiology services, dedicated
                                    to the well-being of your heart. Our experienced cardiologists offer comprehensive
                                    assessments, precise diagnostics, and personalized treatment plans for
                                    cardiovascular conditions. Utilizing cutting-edge technology, we ensure accurate
                                    evaluations and effective interventions. Whether for preventive care or managing
                                    existing conditions, Healthcare Clinic is committed to your heart's health. Trust
                                    our specialized team of cardiologists for excellence in cardiac care, where your
                                    cardiovascular well-being is our primary focus. Experience the highest standard of
                                    Cardiology services at Healthcare Clinic, ensuring your heart remains in the best
                                    possible condition.
                                </p>
                                <p class="mt-2 h5 ">
                                    TIMING
                                </p>
                                <p class="mt-2 ">
                                    10:00am to 6:00pm
                                </p>
                            </div>
                            <div class="bookappoinmentt mt-0 ">
                                <a href="tel:+919315172018" class="btn btn-primary btn-lg">Call for Info</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-md-5 col-sm-12 justify-content-center align-items-center mx-auto mt-2 imbox">
                        <div class="col-lg-10 col-md-10 col-sm-12 justify-content-center align-items-center mx-auto">
                            <div class="imagebox">
                                <img src="cardio.jpg" alt="" width="100%" class=" bordering4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sportexercise">
    <div class="bacjgrounbox">
        <div class="boardcontent">
            <div class="container pt-5 pb-5">
                <div class="headingline text-center">
                    <h3>SPORTS & EXCERSICE PHYSICIAN</h3>
                </div>
                <div class="row justify-content-center align-items-center  pb-5">
                    <div
                        class="col-lg-5 col-md-5 col-sm-12 justify-content-center align-items-center mx-auto mt-2 imbox">
                        <div class="col-lg-10 col-md-10 col-sm-12 justify-content-center align-items-center mx-auto">
                            <div class="imagebox">
                                <img src="sport.jpg" alt="" width="100%" class=" bordering5">
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-7 col-md-7 col-sm-12 align-items-center justify-content-center mx-auto contentlines">
                        <div class="col-lg-10 col-md-10 col-sm-12 justify-content-center align-items-center mx-auto">
                            <div class="content mt-2">
                                <p class="text-light">
                                    Healthcare Clinic proudly offers specialized Sports & Exercise Physician services to
                                    elevate your athletic performance and overall fitness. Our dedicated team of experts
                                    conducts thorough assessments, designs personalized fitness plans, and provides
                                    injury prevention strategies. Utilizing cutting-edge techniques, we aim to optimize
                                    your physical capabilities and promote well-being. Whether you're a professional
                                    athlete or a fitness enthusiast, trust Healthcare Clinic for tailored Sports &
                                    Exercise Medicine. Our commitment is to guide you towards peak performance, ensuring
                                    a healthy and active lifestyle. Experience excellence in sports medicine with our
                                    expert care and personalized approach.
                                </p>
                                <p class="mt-2 h5 text-light ">
                                    VIDEO CALL ON APPOITNMENT
                                </p>

                            </div>
                            <div class="bookappoinmentt mt-3 ">
                                <a href="tel:+919315172018" class="btn btn-primary btn-lg">Call for Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
