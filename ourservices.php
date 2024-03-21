<?php include("array.php"); ?>

<div class="d-flex flex-wrap justify-content-center align-items-center">
    <?php foreach ($ourServices as $service) : ?>
        <div class="our-services-container-card d-flex flex-column justify-content-center align-items-center mx-1 mb-2 pt-2 bg-white pb-2">
            <img src="<?php echo $service[0]; ?>" alt="our-services-card-image" class="mb-2" />
            <p><?php echo $service[1]; ?></p>
        </div>
    <?php endforeach; ?>
</div>