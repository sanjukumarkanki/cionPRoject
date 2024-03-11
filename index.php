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

<body class="   w-100">
    <header class="d-flex w-100  justify-content-between  align-content-center">
        <img src="	https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="logo" />
        <button type="button ">
            <span>Contact</span>
        </button>
    </header>
    <!-- Banner Container -->
    <div class="banner-container-main  d-flex flex-column flex-md-row justify-content-around  align-items-center ">
        <div class=" p-3 d-flex flex-column  justify-content-center align-items-center  ">
            <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                <span>Rs.10999/-</span>
            </h1>
            <p class=" align-self-start">
                <im src="assests\Group 35814.png" alt="" /> One Free Oncology Consultation
            </p>
            <p class="align-self-start">
                <img src="assests\Group 35814.png" alt="" /> One Free Oncology Consultation
            </p>
        </div>
        <form style="  background-color: #F2F2F2;" class="d-none py-3 d-md-flex flex-md-column  justify-content-center  align-items-center  ">
            <h3 class="mb-3">Book your Pet Scan Now !</h3>
            <input type="text" class="mb-3" placeholder="name" />
            <input type="text" class="mb-3" placeholder="Phone number" />
            <select placeholder="Select type of scan">
                <option>A</option>
                <option>A</option>
                <option>A</option>
                <option>A</option>
            </select>
            <div class="  d-flex  flex-column rounded-2   mt-3  justify-content-center  align-items-center  w-100 ">
                <button type="submit ">BOOK NOW</button>
            </div>
        </form>
    </div>

    <!-- small devices Form -->
    <div class=" d-md-none pt-3 pb-3 d-flex flex-column  justify-content-center  align-items-center  small-devices-form-container">
        <form class=" pt-2 pb-2 ">
            <h3 class="text-center">Book your Pet Scan Now !</h3>
            <input type="text" class="mb-2" placeholder="name" />
            <input type="text" class="mb-2" placeholder="Phone number" />
            <select placeholder="Select type mb-2 of scan">
                <option>A</option>
                <option>A</option>
                <option>A</option>
                <option>A</option>
            </select>
            <div class="mt-3 d-flex  justify-content-center align-items-center ">
                <button type="submit " class=" d-flex flex-column justify-content-center  align-items-center ">
                    <spa>BOOK NOW</spa>
                </button>
            </div>
        </form>
    </div>

    <!-- Services We Do -->
    <div class="bg-white  w-100 serives-we-do-container d-flex flex-row flex-wrap  justify-content-center align-items-center  ">

        <?php $cardArray = [["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"]];
        foreach ($cardArray as $card) : ?>
            <div class="d-flex  flex-row m-1   justify-content-center align-items-center">
                <img src="<?php echo $card[0] ?>" alt="" />
                <span class="mx-2"><?php echo  $card[1]; ?></span>
            </div>
        <?php endforeach; ?>

    </div>


    <!-- Types of scans we Do -->
    <div class=" pb-3 w-100 p-1" style=" background-color : #F0D0DD;">
        <h2 class="  types-of-scans-text  text-center">Types of scan we do</h2>
        <div class=" d-flex flex-row flex-wrap  justify-content-center  align-items-center ">
            <?php $typeofscansarr = [
                ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"]
            ];
            foreach ($typeofscansarr as $details) : ?>
                <div class="bg-white m-1 types-of-scans-container px-4 py-3  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                    <h3 class="mb-3"><?php echo $details[0]; ?></h3>
                    <div class=" d-flex justify-content-between align-items-center">
                        <p style="text-decoration: line-through; color: #BEBBBB;"><?php echo $details[1]; ?></p>
                        <p style="color: #802A8F;"><?php echo $details[2]; ?></p>
                    </div>
                    <div class=" text-center ">
                        <button class="  ">Book now</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



    <!--Book Appointment container -->
    <div class="w-full  d-flex justify-content-start book-appointment-container  align-items-center  pt-3 pb-3 w-100 ">
        <img src="assests\Ellipse 2.png" class="mx-3" alt="" />
        <div class=" d-flex flex-column   flex-grow-1  mx-2 flex-md-row  justify-content-md-between  justify-content-start   align-items-start ">
            <p>Don’t have a prescription?
                <br />
                Consult Our Oncologist FREE now!  
            </p>
            <button style=" background-color : white; color: black;">BOOK NOW</button>
        </div>
    </div>

    <!-- Testimonals -->
    <div class="  pt-3 pb-3 d-flex flex-column  justify-content-center  align-items-center " style="background-color: white;">
        <h1 class=" testimonals-text text-center ">Testimonals</h1>
        <div class="carousel-inner-container pt-2 pb-2 ">
            <div id=" carouselExampleAutoplaying" class="carousel slide  " data-bs-ride="carousel">
                <div class="carousel-inner px-2 w-100 text-center ">
                    <div class="carousel-item active">
                        <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -</p>
                        <hr class="" />
                        <div class=" d-flex flex-row   justify-content-between  align-items-center ">
                            <p>Priya.k</p>
                            <img src="assests\Group 46.png" alt="" />
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -</p>
                        <hr class="" />
                        <div class=" d-flex flex-row   justify-content-between  align-items-center ">
                            <p>Priya.k</p>
                            <img src="assests\Group 46.png" alt="" />
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
    </div>


    <!-- Guidlines for PET-CT -->
    <div style="background-color: #F4F4F4;" class="  pt-5 pb-3">
        <h2 style="font-size: 1rem;" class="text-center   mb-3">Guidelines for PET-CT scans</h2>
        <div class=" d-flex   flex-wrap  justify-content-center  align-items-center ">
            <?php
            $mainGudilensArray = [
                ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."],
                ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."],
                ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."]
            ];

            foreach ($mainGudilensArray as $details) : ?>
                <div class="bg-white mb-3 mb-md-0  mx-1 px-1 text-center  guidlines-container  d-flex flex-column  justify-content-center  align-items-center  rounded-3 ">
                    <img src="<?php echo $details[0]; ?>" class=" mb-2" alt="" />
                    <p><?php echo $details[1]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Places Container-->
    <div class="  d-flex flex-row pt-3 pb-2 flex-wrap places-main-container  justify-content-center  align-items-center  " style=" background-color : #802A8F;">
        <?php
        $placesArray = [["assests\Group 35750.png", "Chinnagadili"], ["assests\Group 35750.png", "Chinnagadili"], ["assests\Group 35750.png", "Chinnagadili"], ["assests\Group 35750.png", "Chinnagadili"]];
        foreach ($placesArray as $details) : ?>
            <div class="places-container mx-md- d-flex  justify-content-start   align-items-center ">
                <img src="<?php echo $details[0]; ?>" class=" mx-2 mb-3" alt="" />
                <p class=" text-white  "><?php echo $details[1]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- Understanding PET-CT Scans: Importance, Need, and Cost in India-->
    <div class="pt-3 px-2 pb-3 d-flex flex-column  justify-content-center  align-items-center  ">
        <h3 style="font-size: 1rem;" class=" guidlines-text mb-3 ">Understanding PET-CT Scans: Importance, Need, and Cost in India</h3>
        <div class=" d-flex w-100   flex-row flex-wrap   pet-ct-container  justify-content-center align-items-center ">
            <div class="  mb-2  mb-md-0  ">
                <img src="assests\image 16.png" alt="" />
            </div>
            <div style="border-style: black;" class="  bg-white shadow-lg  border-1  p-0 ">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item active " style="width : 100%;">
                        <h2 class="accordion-header" style="width : 100%;">
                            <button style="width : 100%;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Our Services -->
    <div style="background-color: #F0D0DD;" class="pt-3 pb-3  text-center  ">
        <h1 style="font-size :1rem;">Our Services</h1>
        <?php $array = [["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"],  ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"]] ?>
        <div class="   d-flex  flex-wrap  justify-content-center  align-items-center ">
            <?php foreach ($array as $each) : ?>
                <div class="  our-services-container-card d-flex flex-column  justify-content-center  align-items-center   mx-1 mb-2 pt-2 bg-white  pb-2 ">
                    <img src="<?php echo $each[0] ?>" class=" mb-2" alt="" />
                    <p class=" fw-light "><?php echo $each[1] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- FAQS Container -->
    <div class=" pt-5 pb-5 bg-white d-flex flex-column  justify-content-center  align-items-center ">
        <h2 style="font-size: 1rem;" class="  mb-3  ">FAQS</h2>
        <div class=" d-flex flex-wrap   justify-content-center fqs-main-container  align-items-center   ">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="mx-2 faqs-container">
                    <div class="accordion accordion-flush border-bottom-1" id="accordionFlushExample<?php echo $i; ?>">
                        <div class="accordion-item active" style="width: 100%;">
                            <button style="color:#802A8F;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $i; ?>">
                                What is PET Scan?
                            </button>
                            <div id="flush-collapseOne<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample<?php echo $i; ?>">
                                <div class="accordion-body">
                                    Positron Emission Tomography (PET) is a non-invasive imaging technique. PET Scan reports functional activity, constitution, and body structure of cells inside the body. A PET Scan is precise and helps in diagnosing sicknesses which include most cancers at early stages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

</html>




<!-- header -->
<!-- <header class="d-flex w-100  justify-content-between  align-content-center">
            <img src="	https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="logo" />
            <button type="button ">
                <span>Contact</span>
            </button>
        </header>




        <div class="banner-container-main d-flex flex-column  flex-md-row  justify-content-center  align-items-center " style=" background-image: url('https://s3-alpha-sig.figma.com/img/b41d/8b52/964ca655f70249b0c7bb8ae9933359f9?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=N-suJEHtWDxwS~zdRWrbP4FezCPXtleVtxH5qy6qHpiPcXi3QqRL~QLucAXnNLPqhUsk8kp~88ktf5CMJB-8UDYU8jwfvnZLi3B1GX4u7BGqpcpDj5k5H7celxUi40ch3kafg8LjSLNMvWCdy~pzip5LbAmtJShT6h60zpQumwsF-EHAgeQKEQ0wVIsVmMQS7KoxZQGdD2RdeQVZrujm2nKgTqSNjBHOkt-hdsy1pwxjPb95A6inH6zN6MiiX6pA-S7RwOlzqE-O4hAWpSLNjDQ~nfyIVM4a9fGSxbmKIWZ5kohpl0K4tHDlSAmNen8lnChJhAskZwb77Y05lLT3NQ__'); background-size: cover; background-position : center;">
            <div class=" p-3 bg-white ">
                <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                    <span>Rs.10999/-</span>
                </h1>
                <p>One Free Oncology Consultation</p>
                <p class="mt-2">One Free Oncology Consultation</p>
            </div>
            <form style="width: 100%;  background-color: #F2F2F2;" class=" d-flex  flex-column  px-4 py-3 rounded-2   justify-content-center  align-content-center ">
                <h3 class="text-center ">Book your Pet Scan Now !</h3>
                <input type="text" class="mb-3" placeholder="name" />
                <input type="text" class="mb-3" placeholder="Phone number" />
                <select placeholder="Select type of scan">
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                </select>
                <div class="  d-flex  flex-column rounded-2   mt-3  justify-content-center  align-items-center  w-100 ">
                    <button type="submit " class=" px-5 py-2">BOOK NOW</button>
                </div>
            </form>
        </div> -->



<!-- Banner container -->
<!-- <div class="  container-fluid p-3  " style=" background-image: url('https://s3-alpha-sig.figma.com/img/b41d/8b52/964ca655f70249b0c7bb8ae9933359f9?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=N-suJEHtWDxwS~zdRWrbP4FezCPXtleVtxH5qy6qHpiPcXi3QqRL~QLucAXnNLPqhUsk8kp~88ktf5CMJB-8UDYU8jwfvnZLi3B1GX4u7BGqpcpDj5k5H7celxUi40ch3kafg8LjSLNMvWCdy~pzip5LbAmtJShT6h60zpQumwsF-EHAgeQKEQ0wVIsVmMQS7KoxZQGdD2RdeQVZrujm2nKgTqSNjBHOkt-hdsy1pwxjPb95A6inH6zN6MiiX6pA-S7RwOlzqE-O4hAWpSLNjDQ~nfyIVM4a9fGSxbmKIWZ5kohpl0K4tHDlSAmNen8lnChJhAskZwb77Y05lLT3NQ__'); background-size: cover; background-position : center;">
            <div class="row ">
                <div class="col-12 col-md-6 banner-text-container  ">
                    <div class=" p-3">
                        <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                            <span>Rs.10999/-</span>
                        </h1>
                        <p>One Free Oncology Consultation</p>
                        <p class="mt-2">One Free Oncology Consultation</p>
                    </div>
                </div>

                <div class="col-12  d-none  d-md-block   col-md-5 d-flex flex-column  justify-content-center  align-items-center ">
                    <form style="width: 100%;  background-color: #F2F2F2;" class=" d-flex  flex-column  px-4 py-3 rounded-2   justify-content-center  align-content-center ">
                        <h3 class="text-center ">Book your Pet Scan Now !</h3>
                        <input type="text" class="mb-3" placeholder="name" />
                        <input type="text" class="mb-3" placeholder="Phone number" />
                        <select placeholder="Select type of scan">
                            <option>A</option>
                            <option>A</option>
                            <option>A</option>
                            <option>A</option>
                        </select>
                        <div class="  d-flex  flex-column rounded-2   mt-3  justify-content-center  align-items-center  w-100 ">
                            <button type="submit " class=" px-5 py-2">BOOK NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->