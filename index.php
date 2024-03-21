<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="./assests/image-17.webp" as="image">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body class="">
    <header class="d-flex  px-4 justify-content-between  align-items-center ">
        <img src="	https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="company-logo" />
        <button type="button ">
            <a href="tel:18001202676" class=" text-decoration-none  text-white ">
                <span>Contact Us</span>
            </a>
        </button>

    </header>
    <!-- Banner Container -->
    <div class="banner-container-main   " style=" background-image : url('./assests/image-17.webp');">
        <!-- Banner Image Container -->
        <div style="background-image: url('./assests/image-17.webp');" class="  d-flex flex-column  banner__heading justify-content-start align-items-start  ">
            <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                <span>Rs.10999/-</span>
            </h1>
            <div>
                <p class=" d-flex justify-content-between align-items-center">
                    <img src="assests\Group 35814.png" alt="doctor-image" />
                    <span class=" flex-grow-1  ">One Free Oncology Consultation</span>
                </p>
                <p class=" d-flex justify-content-between align-items-center">
                    <img src="	https://cion-landingpage.000webhostapp.com/assests/Group%2035811.png" alt="doctor-image2" />
                    <span class=" flex-grow-1 ">One Free Oncology Consultation</span>
                </p>
            </div>
        </div>
        <!-- Form container -->
        <div id="formContainer" class=" small-devices-form-container pb-4 pt-4 p-md-0 ">
            <form method="POST" action="./redirect.php" style="  background-color: #F2F2F2; " class="    ">
                <h2 class="">Book your Pet Scan <br class=" d-md-none " /> Now !</h2>

                <input type="text" pattern="[a-zA-Z]{3,}" class="" name="name" title="only alphacharacters" required placeholder="Name" />
                <input type="text" class="" pattern="[0-9]{10}" title="Ten-Digit Numeric Phone Number" name="phone" required placeholder="Phone number" />
                <select name="scan" required placeholder="Select type of scan">
                    <option>Select type of scan</option>
                    <option>Whole Body Analog Pet CT scan</option>
                    <option>Whole Body Digital Pet CT Scan</option>
                    <option>PSMA Pet CT Scan</option>
                    <option>Fdopa Pet CT Scan</option>
                    <option>Dotatate Pet CT Scan</option>
                </select>
                <button type="submit " class=" align-self-center ">Book Now</button>
            </form>
        </div>
    </div>
    <!-- Services We Do -->
    <div class="bg-white   serives-we-do-container d-flex flex-row flex-wrap  justify-content-center  justify-content-md-between   align-items-center  ">
        <div class="d-flex  mb-4 mb-md-0 flex-row justify-content-center align-items-center">
            <img src="assests/Group 35729.png" alt="services-we-do-card-image" />
            <span class="mx-2">Upto 40% Discount</span>
        </div>

        <div class="d-flex  mb-4 mb-md-0  flex-row justify-content-center align-items-center">
            <img src="assests\Group 35723.png" alt="services-we-do-card-image" />
            <span class="mx-2">Same Day Report</span>
        </div>

        <div class="d-flex  flex-row justify-content-center align-items-center">
            <img src="assests\Group 35729 (2).png" alt="services-we-do-card-image" />
            <span class="mx-2">Latest Technology</span>
        </div>

        <div class="d-flex  flex-row justify-content-center align-items-center">
            <img src="	https://www.cioncancerclinics.com/pet-ct-scan-vizag/assets/img/pet/s2_icon4.webp" alt="services-we-do-card-image" />
            <span class="mx-2">Free Doctor Consultation</span>
        </div>
    </div>

    <!-- Types of scans we Do -->
    <?php include("typesofscans.php"); ?>
    </div>

    <!--Book Appointment container -->
    <div class=" d-flex justify-content-start book-appointment-container  align-items-center  ">
        <img src="assests\Ellipse 2.png" class="mx-2" alt="book-appointment-container-doctor-png" />
        <div class=" d-flex flex-column flex-md-row flex-md-grow-1    justify-content-start justify-content-md-between  align-items-center  ">
            <p>Don’t have a prescription?
                <br />
                Consult Our Oncologist <span class="fw-bold">FREE</span> now!  
            </p>
            <a href="#formContainer" class=" text-decoration-none align-self-start  align-self-md-center  text-white ">
                <button style=" background-color : white; color: #802A8F;" class=" align-self-start  align-self-md-center  ">Book Appointment
                </button>
            </a>

        </div>
    </div>
    <!-- Testimonials -->
    <div class="pt-3 pb-5 px-3 d-flex flex-column   justify-content-center  align-items-center ">
        <h2 class="mb-3">Testimonals</h2>
        <?php include('./testimonailarray.php'); ?>
    </div>
    <!-- Guidlines for PET-CT -->
    <div style="background-color: #F4F4F4;" class="  pt-3 pb-4">
        <h2 style="font-size: 1rem;" class="text-center   mb-3">Guidelines for PET-CT scans</h2>
        <div class=" d-flex   flex-wrap  justify-content-center  align-items-center ">
            <div class="bg-white mb-3 mb-md-0 p-2  mx-1 text-center  guidlines-container  d-flex flex-column  justify-content-around  align-items-center  ">
                <img src="assests\Group 35733.png" class="" alt="guidline-card=image" />
                <p>At least 6 hours of fasting before the scan, but the patient can have plain water.</p>
            </div>
            <div class="bg-white mb-3 mb-md-0 p-2  mx-1 text-center  guidlines-container  d-flex flex-column  justify-content-center  align-items-center  ">
                <img src="assests\Group 35734.png" class=" " alt="guidline-card=image" />
                <p class="mt-1">You are advised to report one hour before the scheduled time</p>
            </div>
            <div class="bg-white mb-3 mb-md-0 p-2  mx-1 text-center  guidlines-container  d-flex flex-column  justify-content-center  align-items-center  ">
                <img src="assests\Group 35821.png" class=" " alt="guidline-card=image" />
                <p>Carry previous PET-CT reports, CDs, medical records, recent serum creatinine and fasting blood sugar reports.</p>
            </div>
        </div>
    </div>
    <!-- Locations Container -->
    <div class="   pt-3 pb-3 places-main-container   " style=" background-color : #802A8F;">
        <div class=" d-flex flex-row  justify-content-between places__container mb-3 mb-md-0  align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>Chinnagadili</p>
        </div>
        <div class=" d-flex flex-row  justify-content-between places__container mb-3 mb-md-0 align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>MVP Colony
            </p>
        </div>
        <div class=" d-flex flex-row  justify-content-between places__container mb-3 mb-md-0  align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>Jagadamba Centre
            </p>
        </div>
    </div>
    <!-- Understanding PET-CT Scans: Importance, Need, and Cost in India-->
    <div class="pt-4 px-2 pb-4 text-center   ">
        <h3 style="font-size: 1rem; " class="w-100 guidlines-text mb-4 ">Understanding PET-CT Scans:
            <br />Importance, Need, and Cost in India
        </h3>
        <div class=" d-flex w-100   flex-row flex-wrap   pet-ct-container  justify-content-center gap-3   align-items-start ">
            <div class="  mb-2  mb-md-0  ">
                <!-- Pet-Ct-container Image -->
                <img data-bs-toggle="modal" data-bs-target="#exampleModal" src="https://heroic-stroopwafel-3d9b2b.netlify.app/assests/Group%2035829.png" alt="pet-ct-bg-main" />

                <!-- Pet-Ct-container Video Url Pop Up Container -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <iframe width="100%" class="rounded-2 border-2    border-white  shadow-lg " src="https://www.youtube.com/embed/lE6bzCEjyU0?si=5KhCCqRzjCbA_JiD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn  btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pet-ct Accordions -->
            <div style="border-style: black;  " class="  bg-white border-1  p-0 ">
                <div class="accordion accordion-flush" id="accordionFlushExample7">
                    <div class="accordion-item">
                        <h2 class="accordion-header " style="background-color: pink; border : none !important;" id="flush-heading15">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
                                What is PET Scan
                            </button>
                        </h2>
                        <div id="flush-collapse15" class="accordion-collapse collapse show" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample7">
                            <div class="accordion-body  text-start ">
                                PET scan is a medical imaging method using a trace of radioactive material to reveal metabolic activity.

                                <br />
                                <br />It helps detect and monitor diseases, especially cancer, by providing detailed insights into tissue function. PET scans are often combined with other imaging techniques for comprehensive diagnostics.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading16">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
                                Why you need PET Scan?
                            </button>
                        </h2>
                        <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample7">
                            <div class="accordion-body text-start">PET scans are crucial for diagnosing and monitoring diseases, as they reveal metabolic activity in tissues. This imaging technique is particularly valuable in detecting cancer and assessing treatment effectiveness. It aids physicians in making informed decisions about patient care based on detailed insights into the body's physiological processes.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading17">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
                                How much PET Scan cost in India?
                            </button>
                        </h2>
                        <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17" data-bs-parent="#accordionFlushExample7">
                            <div class="accordion-body text-start">The cost of a PET scan in India can vary widely depending on the city, facility, and specific requirements. On average, it may range from ₹15,000 to ₹35,000 or more. It is advisable to check with individual healthcare providers for accurate and up-to-date pricing information.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services -->
    <div style="background-color: #F0D0DD;" class="pt-3 pb-3 d-flex flex-column  justify-content-center  align-items-center  text-center  ">
        <h2 style="font-size :1rem; font-weight : 700;">Our Services</h2>
        <?php include('ourservices.php') ?>
    </div>


    <!-- FAQS Container -->
    <?php
    include('faqscontainer.php');
    ?>

    </div>
    </div>

</html>