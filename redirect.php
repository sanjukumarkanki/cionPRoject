  <!-- small devices Form -->
  <div class=" container-fluid d-md-none  p-3" style="background-color: #F0D0DD;">
      <div class="row d-flex  flex-column  justify-content-center  align-items-center ">
          <div class="col-12   d-flex flex-column  justify-content-center  align-items-center ">
              <form style="width: 100%;  background-color: #F2F2F2;" class=" d-flex  flex-column   rounded-2   justify-content-center  align-content-center ">
                  <h3 class="text-center">Book your Pet Scan Now !</h3>
                  <input type="text" placeholder="name" />
                  <input type="text" placeholder="Phone number" />
                  <select placeholder="Select type of scan">
                      <option>A</option>
                      <option>A</option>
                      <option>A</option>
                      <option>A</option>
                  </select>
                  <div class="  d-flex mt-3  flex-column  justify-content-center  align-items-center  w-100 ">
                      <button type="submit " class=" px-5 py-3">BOOK NOW</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- Services We do -->
  <div class=" container-fluid p-0 d-flex  flex-column  justify-content-center  align-items-center " style="background-color: #F0D0DD;">
      <?php $cardArray = [["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"], ["assests/Group 35729.png", "Upto 40% Discount"]] ?>
      <div class="row bg-white p-3 d-flex w-100  flex-md-row  justify-content-center  align-items-center ">
          <?php foreach ($cardArray as $card) : ?>
              <div class="col-6 col-md-3  serives-we-do d-flex flex-row justify-content-center  align-items-center  ">
                  <img src="<?php echo $card[0] ?>" alt="" />
                  <p class="m-0"><?php echo  $card[1]; ?></p>
              </div>
          <?php endforeach; ?>
      </div>
  </div>

  <!-- Testimonals -->
  <div class="container mt-5 " style="background-color: #F0D0DD;">
      <div class=" row py-3 px-2 d-flex flex-column justify-content-center align-items-center ">
          <h1 class=" testimonals-text text-center ">Testimonals</h1>
          <div class=" col-12 ">
              <div id=" carouselExampleAutoplaying" class="carousel slide  " data-bs-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <p>"Getting my PET CT scan was less stressful than I anticipated, thanks to the helpful staff. Rani was particularly supportive, ensuring I got my reports without any hassle. The follow-up oncology consultation was also a helpful touch." -</p>
                          <hr class="" />
                          <div class="w-full d-flex flex-column  flex-md-row justify-content-center  justify-content-md-between  align-items-center ">
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

  <div style="background-color: #F4F4F4;" class=" mt-5 p-3 container-fluid">
      <h2 style="font-size: 1rem;" class="text-center  mb-2">Guidelines for PET-CT scans</h2>
      <div class="row d-flex  flex-wrap  justify-content-center  align-items-center ">
          <?php
            $mainGudilensArray = [
                ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."],
                ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."],
                ["assests\Group 35733.png", "At least 6 hours of fasting before the scan, but the patient can have plain water."]
            ];

            foreach ($mainGudilensArray as $details) : ?>
              <div class="col-12 col-sm-6 col-md-4 mb-3">
                  <div class="bg-white  text-center  guidlines-container  align-items-center  rounded-3 px-4 py-3">
                      <img src="<?php echo $details[0]; ?>" class=" mb-3" alt="" />
                      <p><?php echo $details[1]; ?></p>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </div>






  <!-- FAQS Container -->
  <div class=" container-fluid pt-2 pb-5 mt-5 bg-white">
      <h2 style="font-size: 1rem;" class="  mb-3 text-center ">FAQS</h2>
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