<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="d-flex flex-column">
        <!-- header -->
        <header class="d-flex  justify-content-between  align-content-center">
            <img src="	https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/cion-cancer-clinics-logo.svg" alt="logo" />
            <button type="button">
                <span>Contact</span>
            </button>
        </header>
        <!-- Banner Container -->
        <div class="  container-fluid p-3   " style=" background-image: url('https://s3-alpha-sig.figma.com/img/b41d/8b52/964ca655f70249b0c7bb8ae9933359f9?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=N-suJEHtWDxwS~zdRWrbP4FezCPXtleVtxH5qy6qHpiPcXi3QqRL~QLucAXnNLPqhUsk8kp~88ktf5CMJB-8UDYU8jwfvnZLi3B1GX4u7BGqpcpDj5k5H7celxUi40ch3kafg8LjSLNMvWCdy~pzip5LbAmtJShT6h60zpQumwsF-EHAgeQKEQ0wVIsVmMQS7KoxZQGdD2RdeQVZrujm2nKgTqSNjBHOkt-hdsy1pwxjPb95A6inH6zN6MiiX6pA-S7RwOlzqE-O4hAWpSLNjDQ~nfyIVM4a9fGSxbmKIWZ5kohpl0K4tHDlSAmNen8lnChJhAskZwb77Y05lLT3NQ__'); background-size: cover; background-position : center;">
            <div class="row ">
                <div class="col-12 banner-text-container col-md-6">
                    <div class="p-3">
                        <h1 class="text-white">PET CT SCAN Cost for cancer diagnostics starts at
                            <span>Rs.10999/-</span>
                        </h1>
                        <p>
                            <img src="assests\Group 35814.png" class="mr-5" height="20px" width="20px" alt="" />
                            <span class="ml-5">One Free Oncology Consultation</span>
                        </p>
                        <p>
                            <img src="assests\Group 35814.png" class="mr-5" height="20px" width="20px" alt="" />
                            <span class="ml-5">One Free Oncology Consultation</span>
                        </p>
                    </div>
                </div>

                <div class="col-12  d-none  d-md-block   col-md-6  ">
                    <div class="p-3 d-flex flex-column  justify-content  align-items-end">
                        <form style="width: 100%;  background-color: #F2F2F2;" class=" d-flex  flex-column  px-4 py-5 rounded-2   justify-content-center  align-content-center ">
                            <h3 class="text-center">Book your Pet Scan Now !</h3>
                            <input type="text" placeholder="name" />
                            <input type="text" placeholder="Phone number" />
                            <select placeholder="Select type of scan">
                                <option>A</option>
                                <option>A</option>
                                <option>A</option>
                                <option>A</option>
                            </select>
                            <div class="  d-flex  flex-column  justify-content-center  align-items-center  w-100 ">
                                <button type="submit " class=" px-5 py-3">BOOK NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Form Container -->

        <div class=" container-fluid d-md-none  p-3" style="background-color: #F0D0DD;">
            <div class="row d-flex  flex-column  justify-content-center  align-items-center ">
                <div class="col-12   d-flex flex-column  justify-content-center  align-items-center ">
                    <form style="width: 100%;  background-color: #F2F2F2;" class=" d-flex  flex-column  px-4 py-5 rounded-2   justify-content-center  align-content-center ">
                        <h3 class="text-center">Book your Pet Scan Now !</h3>
                        <input type="text" placeholder="name" />
                        <input type="text" placeholder="Phone number" />
                        <select placeholder="Select type of scan">
                            <option>A</option>
                            <option>A</option>
                            <option>A</option>
                            <option>A</option>
                        </select>
                        <div class="  d-flex  flex-column  justify-content-center  align-items-center  w-100 ">
                            <button type="submit " class=" px-5 py-3">BOOK NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Cards Container -->
        <div class=" container-fluid p-3  d-flex flex-column " style="background-color: #F0D0DD;">
            <?php $cardArray = [["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"]] ?>
            <div class="row bg-white p-3 d-flex   flex-md-row  justify-content-center  align-items-center ">
                <?php foreach ($cardArray as $card) : ?>
                    <div class="col-6    upto-off-card-container col-md-3 d-flex flex-column  justify-content-center  align-items-center ">
                        <img src="<?php echo $card[0] ?>" alt="" class=" mb-3 " width="80px" height="80px" />
                        <p><?php echo  $card[1]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>


            <!-- Types of scans we Do -->
            <h2 class="  types-of-scans-text  text-center  mt-5">Types of scan we do</h2>
            <div class="row d-flex flex-col-column mb-5 flex-sm-row  justify-content-center p-3">
                <?php $typeofscansarr = [
                    ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                    ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                    ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                    ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                    ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"],
                    ["whole Body Analog Pet CT scan", "Rs 18000/-", "Rs.10999/-"]
                ];
                foreach ($typeofscansarr as $details) : ?>
                    <div class="col-12 col-sm-6  col-md-4 mb-3">
                        <div class="bg-white types-of-scans-container px-4 py-3  text-center d-flex flex-column  justify-content-center  align-items-center  ">
                            <h3 class="mb-3"><?php echo $details[0]; ?></h3>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <p style="text-decoration: line-through; color: #BEBBBB;"><?php echo $details[1]; ?></p>
                                <p style="color: #802A8F;"><?php echo $details[2]; ?></p>
                            </div>
                            <div class=" text-center ">
                                <button class="btn  px-5 py-2">Book now</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Testimonals -->
        <div class="container mt-5">
            <div class="row p-3 d-flex flex-column  justify-content-center  align-items-center  ">
                <h1 class=" types-of-scans-text fw-bold text-center  ">Testimonals</h1>
                <div class=" col-12   ">
                    <div id="carouselExampleAutoplaying" style="background-color: #F0D0DD;" class="carousel slide  px-5 py-5 " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -</p>
                                <hr class="" />
                                <div>
                                    <p>Priya.k</p>
                                    <img src="assests\Group 46.png" alt="" />
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -</p>
                                <hr class="" />
                                <div>
                                    <p>Priya.k</p>
                                    <img src="assests\Group 46.png" alt="" />
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -</p>
                                <hr class="" />
                                <div>
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
        </div>

        <!-- Main Details -->
        <div style="background-color: #F4F4F4;" class="container-fluid">
            <h2 class="text-center fw-bold fs-1 mb-5">Guidelines for PET-CT scans</h2>
            <div class="row p-3">
                <?php
                $mainGudilensArray = [
                    ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."],
                    ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."],
                    ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."]
                ];

                foreach ($mainGudilensArray as $details) : ?>
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <div class="bg-white  text-center   align-items-center  rounded-3 px-4 py-5">
                            <img src="<?php echo $details[0]; ?>" class=" mb-3" alt="" />
                            <p><?php echo $details[1]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <!-- Places Container-->
        <div class="container-fluid">
            <div class="row  d-flex  p-3  flex-row  justify-content-center  align-items-center  " style=" background-color : #802A8F;">
                <?php
                $placesArray = [["assests\Group 35750.png", "Chinnagadili"], ["assests\Group 35750.png", "Chinnagadili"], ["assests\Group 35750.png", "Chinnagadili"], ["assests\Group 35750.png", "Chinnagadili"]];
                foreach ($placesArray as $details) : ?>
                    <div class="col-6 col-md-3   d-flex flex-column justify-content-center  align-items-center ">
                        <img src="<?php echo $details[0]; ?>" class=" mb-3" alt="" />
                        <p class=" text-white "><?php echo $details[1]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <!-- Understanding PET-CT Scans: Importance, Need, and Cost in India-->
        <div class="container-fluid  mt-5">
            <h3 class=" fs-2 mb-5  fw-bold  text-center ">Understanding PET-CT Scans: Importance, Need, and Cost in India</h3>
            <div class="row d-flex   flex-column  d-md-flex flex-md-row justify-content-center p-3">
                <div class="col-12 col-md-6  ">
                    <div class="p-3">
                        <img src="assests\image 16.png" class="w-100    object-fit-cover " alt="" />
                    </div>
                </div>
                <div style="border-style: black;" class="col-12 col-md-6   bg-white shadow-lg  border-1  p-0 ">
                    <div class="p-3">
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
        </div>

        <!-- Our Services -->
        <div style="background-color: #F0D0DD;" class="container-fluid p-3  mt-5 d-flex flex-column  justify-content-center  align-items-center ">
            <h1 class="fs-2  fw-bold text-center  ">Our Services</h1>
            <?php $array = [["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"], ["assests\Group 35729 (2).png", "Career Path"]] ?>
            <div class="row  p-3   flex flex-wrap  justify-content-center  align-items-center ">
                <?php foreach ($array as $each) : ?>
                    <div class="  col-6 col-md-3 mb-5 ">
                        <div class="  bg-white rounded-2  d-flex flex-column  justify-content-center  align-items-center p-3">
                            <img src="<?php echo $each[0] ?>" class="  mb-3" height="80px" width="80px" alt="" />
                            <p class="fs-3 fw-light "><?php echo $each[1] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- FAQS Container -->
        <div class=" container-fluid p-3 mt-5 mb-5 bg-white">
            <h2 class=" fs-2 fw-bold  mb-3 text-center ">FAQS</h2>
            <div class="row d-flex flex-column flex-md-row  justify-content-center  align-items-center gap-2 ">
                <?php for ($i = 0; $i < 8; $i++) : ?>
                    <div class="col-12 col-md-5">
                        <div class="accordion accordion-flush" id="accordionFlushExample<?php echo $i; ?>">
                            <div class="accordion-item active" style="width: 100%;">
                                <h2 class="accordion-header" style="width: 100%;">
                                    <button style="width: 100%; color:#802A8F;" class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $i; ?>">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="flush-collapseOne<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample<?php echo $i; ?>">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <!-- php Ends Here-->
            </div>
        </div>
    </div>
</body>

</html>
