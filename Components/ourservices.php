<?php include("array.php"); ?>

<div class="d-flex flex-wrap justify-content-center align-items-center">
    <?php foreach ($ourServices as $service) : ?>
        <div class="our-services-container-card  text-center   bg-white ">
            <img src="<?php echo $service[0]; ?>" alt="our-services-card-image" />
            <p><?php echo $service[1]; ?></p>
        </div>
    <?php endforeach; ?>
</div>