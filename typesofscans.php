<?php include("array.php"); ?>

<div class="pt-4 pb-4" style="background-color: #F0D0DD;">
    <h2 class="types-of-scans-text text-center">Types of scans we do</h2>
    <div class="types-of-main-container d-flex flex-row flex-wrap justify-content-center align-items-center">
        <?php foreach ($typeofscansarr as $scan) : ?>
            <div class="bg-white types-of-scans-container p-2 text-center d-flex flex-column justify-content-center align-items-center mx-1 mb-2">
                <h3><?php echo $scan[0]; ?></h3>
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <p class="mx-2" style="text-decoration: line-through; color: #635454;"><?php echo $scan[1]; ?></p>
                    <p style="color: #802A8F;"><?php echo $scan[2]; ?></p>
                </div>
                <button class="align-self-center">
                    <a href="#formContainer" class=" text-decoration-none  text-white ">
                        <span>Book now</span>
                    </a>
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</div>