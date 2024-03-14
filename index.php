<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body class="">
    <header class="d-flex  justify-content-between  align-content-center">
        <img src="	https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="company-logo" />
        <button type="button ">
            <span>Contact</span>
        </button>
    </header>
    <!-- Banner Container -->
    <div class="banner-container-main   ">
        <!-- Banner Image Container -->
        <div class="  d-flex flex-column  banner__heading justify-content-start align-items-start  ">
            <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                <span>Rs.10999/-</span>
            </h1>
            <div>
                <p class="align-self-start">
                    <img src="assests\Group 35814.png" alt="doctor-image" />
                    <span class=" flex-grow-1  ">One Free Oncology Consultation</span>
                </p>
                <p class="align-self-start">
                    <img src="assests\Group 35814.png" alt="doctor-image2" />
                    <span class=" flex-grow-1 ">One Free Oncology Consultation</span>
                </p>
            </div>
        </div>
        <!-- Form container -->
        <div class=" small-devices-form-container">
            <form method="POST" action="redirect.php" style="  background-color: #F2F2F2;" class="d-flex flex-column   justify-content-center  align-items-center  ">
                <h2 class="">Book your Pet Scan Now !</h2>
                <br />
                <input type="text" class="" name="name" required placeholder="name" />
                <input type="text" class="" name="phone" required placeholder="Phone number" />
                <select name="scan" required placeholder="Select type of scan">
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                </select>
                <button type="submit " class=" align-self-center ">BOOK NOW</button>
            </form>
        </div>
    </div>
    <!-- Services We Do -->
    <div class="bg-white   serives-we-do-container d-flex flex-row flex-wrap  justify-content-center  justify-content-md-between   align-items-center  ">
        <?php $cardArray = [["assests/Group 35729.png", "Upto 40% Discount"], ["assests\Group 35723.png", "Same Day Report"], ["assests\Group 35729 (2).png", "Latest Technology"], ["assests/Group 35729.png", "Free Doctor Consultation"]];
        foreach ($cardArray as $card) : ?>
            <div class="d-flex  flex-row justify-content-center align-items-center">
                <img src="<?php echo $card[0] ?>" alt="services-we-do-card-image" />
                <span class="mx-2"><?php echo  $card[1]; ?></span>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Types of scans we Do -->
    <div class=" pt-4 pb-4  " style=" background-color : #F0D0DD;">
        <h2 class="  types-of-scans-text  text-center">Types of scan we do</h2>
        <div class=" d-flex flex-row flex-wrap  justify-content-center  align-items-center ">
            <?php $typeofscansarr = [
                ["Whole Body Analog Pet CT scan ", "Rs 20000/-", "Rs.14999/-"],
                ["Whole Body Digital Pet CT Scan", "Rs 25000/-", "Rs.20999/-"],
                ["PSMA Pet CT Scan", "Rs 35000/-", "Rs.31000/-"],
                ["Fdopa Pet CT Scan", "Rs 35000/-", "Rs.31000/-"],
                ["Dotatate Pet CT Scan", "Rs 35000/-", "Rs.31000/-"],
                ["Dotanoc Pet CT Scan", "Rs 35000/-", "Rs.31000/-"]
            ];
            foreach ($typeofscansarr as $details) : ?>
                <div class="bg-white types-of-scans-container p2  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                    <h3 class="mb-2"><?php echo $details[0]; ?></h3>
                    <div class=" w-100 px-2 d-flex justify-content-between align-items-center">
                        <p style="text-decoration: line-through; color: #BEBBBB;"><?php echo $details[1]; ?></p>
                        <p style="color: #802A8F;"><?php echo $details[2]; ?></p>
                    </div>
                    <button class="  align-self-center  ">
                        <span>Book now</span>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--Book Appointment container -->
    <div class=" d-flex justify-content-start book-appointment-container  align-items-center  ">
        <img src="assests\Ellipse 2.png" class="mx-3" alt="book-appointment-container-doctor-png" />
        <div class=" d-flex flex-column flex-md-row flex-md-grow-1    justify-content-start justify-content-md-between  align-items-center  ">
            <p>Don’t have a prescription?
                Consult Our Oncologist FREE now!  
            </p>
            <button style=" background-color : white; color: black;" class=" align-self-start  align-self-md-center  ">BOOK NOW</button>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="pt-3 pb-3 px-3 d-flex flex-column   justify-content-center  align-items-center ">
        <h2>Testimonals</h2>
        <!-- Small Devices -->
        <div class="carousel-main  d-md-none">
            <div id="carouselExampleAutoplaying" style="background-color: #F0D0DD; border-radius : 0.23rem;" class="carousel slide  px-5 py-5 d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="">"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                        <hr id="carousel-hr">
                        <div style="widt : 90%;" class=" d-flex flex-row  justify-content-between  align-items-center ">
                            <span>Priya K.</span>
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <p class=" text-center ">Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                        <hr id="carousel-hr">

                        <div style="widt : 90%;" class=" d-flex flex-row  justify-content-between  align-items-center ">
                            <span>Arjun.S</span>
                            <span class="rating">⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Testimonals Medium Devices -->
        <div id="testimonial-carousel" class="carousel slide d-none d-md-block  md-device-carousel  testimonial-main-container" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-flex flex-row flex-wrap justify-content-center  align-items-center ">
                        <div class="col-md-5 mx-2">
                            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
                                <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                                <hr>
                                <div style="width : 90%;" class=" d-flex justify-content-between  align-items-center ">
                                    <span>Priya K.</span>
                                    <span class="rating">⭐⭐⭐⭐⭐</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mx-2">
                            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
                                <p>Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                                <hr style="border: 1px solid rgb(176, 169, 166) ;">
                                <div style="width : 90%;" class=" d-flex justify-content-between  align-items-center ">
                                    <span>Arjun.S</span>
                                    <span class="rating">⭐⭐⭐⭐⭐</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row  d-flex flex-row flex-wrap justify-content-center  align-items-center">
                        <div class="col-md-5 mx-2">
                            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
                                <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                                <hr style="border: 1px solid rgb(176, 169, 166) ;">

                                <div style="width : 90%;" class=" d-flex justify-content-between  align-items-center ">
                                    <span>Priya K.</span>
                                    <span class="rating">⭐⭐⭐⭐⭐</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mx-2">
                            <div class="testimonial-single-card" style="background-color: #F0D0DD;">
                                <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch."</p>
                                <hr style="border: 1px solid rgb(176, 169, 166) ;">
                                <div style="width : 90%;" class=" d-flex justify-content-between  align-items-center ">
                                    <span>Arjun.S</span>
                                    <span class="rating">⭐⭐⭐⭐⭐</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Guidlines for PET-CT -->
    <div style="background-color: #F4F4F4;" class="  pt-3 pb-3">
        <h2 style="font-size: 1rem;" class="text-center   mb-3">Guidelines for PET-CT scans</h2>
        <div class=" d-flex   flex-wrap  justify-content-center  align-items-center ">
            <?php
            $mainGudilensArray = [
                ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."],
                ["assests\Group 35734.png", "You are advised to report one hour before the scheduled time"],
                ["assests\Group 35821.png", "Carry previous PET-CT reports, CDs, medical records, recent serum creatinine and fasting blood sugar reports."]
            ];

            foreach ($mainGudilensArray as $details) : ?>
                <div class="bg-white mb-3 mb-md-0 p-2  mx-1 text-center  guidlines-container  d-flex flex-column  justify-content-center  align-items-center  ">
                    <img src="<?php echo $details[0]; ?>" class=" mb-2" alt="guidline-card=image" />
                    <p><?php echo $details[1]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Places Container -->
    <div class="   pt-3 pb-3 places-main-container   " style=" background-color : #802A8F;">
        <div class=" d-flex flex-row  justify-content-start places__container mb-2 mb-md-0  align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>Himayathnagar</p>
        </div>
        <div class=" d-flex flex-row  justify-content-start places__container mb-2 mb-md-0 align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>Narayanaguda
            </p>
        </div>
        <div class=" d-flex flex-row  justify-content-start places__container  align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>Panjagutta
            </p>
        </div>
        <div class=" d-flex flex-row  justify-content-start places__container   align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>Chinnagadili</p>
        </div>
    </div>
    <!-- Understanding PET-CT Scans: Importance, Need, and Cost in India-->
    <div class="pt-3 px-2 pb-3 text-center   ">
        <h3 style="font-size: 1rem; " class="w-100 guidlines-text mb-3 ">Understanding PET-CT Scans:
            <br />Importance, Need, and Cost in India
        </h3>
        <div class=" d-flex w-100   flex-row flex-wrap   pet-ct-container  justify-content-center gap-3   align-items-start ">
            <div class="  mb-2  mb-md-0  ">
                <img src="assests\image 16.png" alt="pet-ct-bg-main" />
            </div>
            <div style="border-style: black;  " class="  bg-white border-1  p-0 ">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" style="background-color: pink;" id="flush-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is PET Scan
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body  text-start ">Positron Emission Tomography (PET) scan also known as PET imaging, it’s a type of nuclear medicine imaging.
                                The tracer is used which can be swallows, injected or inhaled. PET is a combination of CT technique with PET scanner that works together to pr the human body which enables the healthcare worker to plan the process of cancer treatment further.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Why you need PET Scan?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-start">Positron Emission Tomography (PET) scan also known as PET imaging, it’s a type of nuclear medicine imaging.
                                The tracer is used which can be swallows, injected or inhaled. PET is a combination of CT technique with PET scanner that works together to pr the human body which enables the healthcare worker to plan the process of cancer treatment further.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How much PET Scan cost in India?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-start">Positron Emission Tomography (PET) scan also known as PET imaging, it’s a type of nuclear medicine imaging.
                                The tracer is used which can be swallows, injected or inhaled. PET is a combination of CT technique with PET scanner that works together to pr the human body which enables the healthcare worker to plan the process of cancer treatment further.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services -->
    <div style="background-color: #F0D0DD;" class="pt-3 pb-3 d-flex flex-column  justify-content-center  align-items-center  text-center  ">
        <h2 style="font-size :1rem; font-weight : 700;">Our Services</h2>
        <?php $array = [["assests\Group 35775.png", "Cancer Surgeries"], ["assests\Group 35729 (2).png", "Chemotherapy"], ["assests\Group 35778.png", "Immunotherapy"],  ["assests\Group 35729 (2).png", "Radiation Oncology"], ["assests\Group 35776 (1).png", "Biopsy"], ["assests\Group 35778 (1).png", " Breast & Oral Screenings"], ["assests\Group 35779.png", "MRI Scans"], ["assests\Group 35780.png", " Bone scans"]] ?>
        <div class="   d-flex  flex-wrap  justify-content-center  align-items-center ">
            <?php foreach ($array as $each) : ?>
                <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                    <img src="<?php echo $each[0] ?>" alt=" our-services-card-image" class=" mb-2" alt="" />
                    <p><?php echo $each[1] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- FAQS Container -->
    <div class=" pt-3 pb-3 bg-white d-flex flex-column  justify-content-center  align-items-center ">
        <h2 style="font-size: 1rem;" class="   ">FAQS</h2>
        <div class=" d-flex flex-wrap    justify-content-center justify-content-between  fqs-main-container  align-items-start   ">
            <div class="mx-2">
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                How long does PET CT Scan for cancer take?
                            </button>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The average cost of a PET CT scan in Vizag typically ranges between 20,000 to 30,000 rupees. However, at Cion, we are committed to making cancer diagnostics and treatment both accessible and affordable. That's why we offer it at a special price of just 15,000 rupees.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsedTwo" aria-expanded="false" aria-controls="flush-collapsedTwo">
                                Where can I get a pet scan in vizag ?
                            </button>
                            <div id="flush-collapsedTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How much does a PET scan cost in vizag?
                            </button>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                Is there a Whole Body PET CT option?
                            </button>
                            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2">
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Are there PET scan facilities near me?
                            </button>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Where can I get a pet scan in vizag ?
                            </button>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Is there a Whole Body PET CT option?
                            </button>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">

                                Is there an option for a Whole Body PET CT scan?
                            </button>
                            <div id="flush-collapseNine" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, our Whole Body PET CT Digital scans provide a detailed scan of your body to identify areas of high activity, which can help in detecting potential health issues, including cancer, more effectively.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>