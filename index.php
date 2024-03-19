<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="./assests//image-17.webp" as="image">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <!--Owl Carousel-->
</head>

<body class="">
    <header class="d-flex  px-4 justify-content-between  align-items-center ">
        <img src="	https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="company-logo" />
        <button type="button ">
            <span>Contact Us</span>
        </button>
    </header>
    <!-- Banner Container -->
    <div class="banner-container-main   " style=" background-image : url('./assests/image-17.webp');">
        <!-- Banner Image Container -->
        <div style=" backgroun-image : url('./assests/image-17.webp');" class="  d-flex flex-column  banner__heading__container justify-content-start align-items-start  ">
            <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                <span>Rs.10999/-</span>
            </h1>
            <div>
                <p class=" d-flex justify-content-between align-items-center">
                    <img src="assests\Group 35814.png" alt="doctor-image" />
                    <span class=" flex-grow-1  ">One Free Oncology Consultation</span>
                </p>
                <p class=" d-flex justify-content-between align-items-center">
                    <img src="assests/Group 35768 (1).png" alt="doctor-image2" />
                    <span class=" flex-grow-1 ">One Free Oncology Consultation</span>
                </p>
            </div>
        </div>
        <!-- Form container -->
        <div class=" small__devices__form__container pb-4 pt-4 p-md-0 ">
            <form method="POST" action="./connect.php" style="  background-color: #F2F2F2; " class="    ">
                <h2 class="">Book your Pet Scan <br class=" d-md-none " /> Now !</h2>

                <input type="text" class="" pattern="[a-zA-Z]{3,}" title="Alphabetic String (Minimum 3 Characters)" name="name" required placeholder="Name" />
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
    <div class=" pt-4 pb-4  " style=" background-color : #F0D0DD;">
        <h2 class="  types-of-scans-text  text-center">Types of scan we do</h2>
        <div class="types-of-main-container d-flex flex-row flex-wrap    justify-content-center  align-items-center ">
            <div class="bg-white types__of__scans__container p-2  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                <h3 class="">Whole Body Analog Pet CT scan</h3>
                <div class=" w-100  d-flex justify-content-between align-items-center">
                    <p style="text-decoration: line-through; color: #BEBBBB;">Rs 20000/-</p>
                    <p style="color: #802A8F;">Rs.14999/-</p>
                </div>
                <button class="  align-self-center  ">
                    <span>Book now</span>
                </button>
            </div>
            <div class="bg-white types__of__scans__container p-2  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                <h3 class="">Whole Body Digital Pet CT Scan</h3>
                <div class=" w-100 px-2 d-flex justify-content-between align-items-center">
                    <p style="text-decoration: line-through; color: #BEBBBB;">Rs 25000/-</p>
                    <p style="color: #802A8F;">Rs.20999/-</p>
                </div>
                <button class="  align-self-center  ">
                    <span>Book now</span>
                </button>
            </div>


            <div class="bg-white types__of__scans__container p-2  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                <h3 class="">PSMA Pet CT Scan</h3>
                <div class=" w-100 px-2 d-flex justify-content-between align-items-center">
                    <p style="text-decoration: line-through; color: #BEBBBB;">Rs 35000/-</p>
                    <p style="color: #802A8F;">Rs.31000/-</p>
                </div>
                <button class=" ">
                    <span>Book now</span>
                </button>
            </div>

            <div class="bg-white types__of__scans__container p-2  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                <h3 class="mb-2">Fdopa Pet CT Scan</h3>
                <div class=" w-100 px-2 d-flex justify-content-between align-items-center">
                    <p style="text-decoration: line-through; color: #BEBBBB;">Rs 35000/-</p>
                    <p style="color: #802A8F;">Rs.31000/-</p>
                </div>
                <button class="  align-self-center  ">
                    <span>Book now</span>
                </button>
            </div>

            <div class="bg-white types__of__scans__container p-2  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                <h3 class="">Dotatate Pet CT Scan</h3>
                <div class=" w-100 px-2 d-flex justify-content-between align-items-center">
                    <p style="text-decoration: line-through; color: #BEBBBB;">Rs 35000/-</p>
                    <p style="color: #802A8F;">Rs.31000/-</p>
                </div>
                <button class="  align-self-center  ">
                    <span>Book now</span>
                </button>
            </div>

            <div class="bg-white types__of__scans__container p-2  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                <h3 class="">Dotatate Pet CT Scan</h3>
                <div class=" w-100 px-2 d-flex justify-content-between align-items-center">
                    <p style="text-decoration: line-through; color: #BEBBBB;">Rs 35000/-</p>
                    <p style="color: #802A8F;">Rs.31000/-</p>
                </div>
                <button class="  align-self-center  ">
                    <span>Book now</span>
                </button>
            </div>
        </div>
    </div>

    <!--Book Appointment container -->
    <div class=" d-flex justify-content-start book-appointment-container  align-items-center  ">
        <img src="assests\Ellipse 2.png" class="mx-2" alt="book-appointment-container-doctor-png" />
        <div class=" d-flex flex-column flex-md-row flex-md-grow-1    justify-content-start justify-content-md-between  align-items-center  ">
            <p>Don’t have a prescription?
                <br />
                Consult Our Oncologist <span class="fw-bold">FREE</span> now!  
            </p>
            <button style=" background-color : white; color: #802A8F;" class=" align-self-start  align-self-md-center  ">
                <span>Book Appointment</span>
            </button>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="pt-3 pb-5 px-3 d-flex flex-column   justify-content-center  align-items-center ">
        <h2 class="mb-3">Testimonals</h2>
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
        <div id="testimonial-carousel" class="carousel slide d-none d-md-block w-100   md-device-carousel  testimonial-main-container" data-bs-ride="carousel">
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
    <div style="background-color: #F4F4F4;" class="  pt-3 pb-4">
        <h2 style="font-size: 1rem;" class="text-center   mb-3">Guidelines for PET-CT scans</h2>
        <div class=" d-flex   flex-wrap  justify-content-center  align-items-center ">
            <div class="bg-white mb-3 mb-md-0 p-2  mx-1 text-center  guidlines-container  d-flex flex-column  justify-content-around  align-items-center  ">
                <img src="assests\Group 35733.png" class="" alt="guidline-card-image" />
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
    <!-- Places Container -->
    <div class="   pt-3 pb-3 places-main-container   " style=" background-color : #802A8F;">
        <div class=" d-flex flex-row  justify-content-start places__container mb-3 mb-md-0  align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>Chinnagadili</p>
        </div>
        <div class=" d-flex flex-row  justify-content-start places__container mb-3 mb-md-0 align-items-center ">
            <img src="assests\Group 35750.png" alt="Chinnagadili" />
            <p>MVP Colony
            </p>
        </div>
        <div class=" d-flex flex-row  justify-content-start places__container mb-3 mb-md-0  align-items-center ">
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
                <img data-bs-toggle="modal" data-bs-target="#exampleModal" src="https://heroic-stroopwafel-3d9b2b.netlify.app/assests/Group%2035829.png" alt="pet-ct-bg-main" />


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
            <div style="border-style: black;  " class="  bg-white border-1  p-0 ">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header " style="background-color: pink; border : none !important;" id="flush-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is PET Scan
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body  text-start ">
                                PET scan is a medical imaging method using a trace of radioactive material to reveal metabolic activity.

                                <br />
                                <br />It helps detect and monitor diseases, especially cancer, by providing detailed insights into tissue function. PET scans are often combined with other imaging techniques for comprehensive diagnostics.
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
                            <div class="accordion-body text-start">PET scans are crucial for diagnosing and monitoring diseases, as they reveal metabolic activity in tissues. This imaging technique is particularly valuable in detecting cancer and assessing treatment effectiveness. It aids physicians in making informed decisions about patient care based on detailed insights into the body's physiological processes.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How much PET Scan cost in India?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
        <div class="   d-flex  flex-wrap  justify-content-center  align-items-center ">
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="assests\Group 35775.png" alt=" our-services-card-image" class=" mb-2" alt="" />
                <p>Cancer Surgeries</p>
            </div>
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="	https://www.cioncancerclinics.com/pet-ct-scan-vizag/assets/img/pet/service_icon2.webp" alt=" our-services-card-image" class=" mb-2" alt="" />
                <p>Chemotherapy</p>
            </div>
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="assests\Group 35778.png" alt=" our-services-card-image" class=" mb-2" alt="" />
                <p>Immunotherapy</p>
            </div>
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="assests\Group 35729 (2).png" alt=" our-services-card-image" class=" mb-2" alt="" />
                <p>Radiation Oncology</p>
            </div>
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="assests\Group 35776 (1).png" alt=" our-services-card-image" class=" mb-2" alt="" />
                <p>Biopsy</p>
            </div>
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="assests\Group 35778 (1).png" alt=" our-services-card-image" class=" mb-2 mt-3" alt="" />
                <p>Breast & Oral
                    Screenings</p>
            </div>
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="assests\Group 35779.png" alt=" our-services-card-image" class=" mb-2" alt="" />
                <p>MRI Scans</p>
            </div>
            <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                <img src="assests\Group 35780.png" alt=" our-services-card-image" class=" mb-2" alt="" />
                <p>Bone scans</p>
            </div>
        </div>
    </div>
    <!-- FAQS Container -->
    <div class=" pt-3 pb-3 bg-white d-flex flex-column  justify-content-center  align-items-center ">
        <h2 style="font-size: 1rem;" class="   ">FAQS</h2>
        <div class=" d-flex flex-wrap p-2   justify-content-center justify-content-center  fqs-main-container  align-items-start   ">
            <div class="mx-1">
                <div class="faqs-container">
                    <div class="accordion accordion-flush " id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                What's the average cost of a PET CT scan in Vizag?
                            </button>
                            <div id="flush-collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The average cost of a PET CT scan in Vizag typically ranges between 20,000 to 30,000 rupees. However, at Cion, we are committed to making cancer diagnostics and treatment both accessible and affordable. That's why we offer it at a special price of just 15,000 rupees.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush " id="accordionFlushExample">
                        <div class="accordion-item " style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsedFive" aria-expanded="false" aria-controls="flush-collapsedFive">
                                Where can I get a pet scan in vizag ?
                            </button>
                            <div id="flush-collapsedFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    At Cion Cancer Clinic, we have facilities in vizag, making it convenient for you.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush " id="accordionFlushExample">
                        <div class="accordion-item " style="width: 100%;">
                            <h2 class="action-header">
                                <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    How much does a PET scan cost in vizag?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Our PET scans start at ₹14,999, ensuring quality without breaking the bank.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                Is there a Whole Body PET CT option?
                            </button>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, our Whole Body PET CT Digital scans give a complete view of your health.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2">
                <div class="faqs-container">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                Are there PET scan facilities near me?
                            </button>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    To find a PET CT near you, please call us. Our network of trusted partners at Cion Cancer Clinics offer accessible and quality PET CT scans.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                Where can I get a pet scan in vizag ?
                            </button>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    At Cion Cancer Clinic, we have facilities in vizag, making it convenient for you.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                Is there a Whole Body PET CT option?
                            </button>
                            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, our Whole Body PET CT Digital scans give a complete view of your health.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">


                                Is there an option for a Whole Body PET CT scan?
                            </button>
                            <div id="flush-collapseEleven" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
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