<?php include('./Components/array.php'); ?>


<div class="   pt-3 pb-3 places-main-container   " style=" background-color : #802A8F;">
    <?php foreach ($locationContainer as $location) : ?>
        <div class=" d-flex flex-row  justify-content-between places__container mb-3 mb-md-0  align-items-center ">
            <img src="<?php echo $location[0]; ?>" alt="Chinnagadili" />
            <p><?php echo $location[1]; ?></p>
        </div>
    <?php endforeach; ?>
</div>