<?php include("array.php"); ?>
<div class="d-flex flex-column pt-4 pb-4 justify-content-center align-items-center">
    <h2 class="text-center">FAQS</h2>
    <div style="width : 95%;" class="FAQ-container-accordions">
        <!-- Faq's First Container -->
        <div class="accordion accordion-flush sub__faqs__container mx-2" id="accordionFlushExample10">
            <?php for ($index = 0; $index < 5; $index++) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button <?php echo ($index === 0) ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $index; ?>">
                            <?php echo $carouselItems[$index]['question']; ?>
                        </button>
                    </h2>
                    <div id="flush-collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo ($index === 0) ? 'show' : ''; ?>" data-bs-parent="#accordionFlushExample10">
                        <div class="accordion-body"><?php echo $carouselItems[$index]['answer']; ?></div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <!-- Faq's Second Container -->
        <div class="accordion accordion-flush sub__faqs__container" id="accordionFlushExample11">
            <?php for ($index = 5; $index < count($carouselItems); $index++) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button  <?php echo ($index === count($carouselItems) - 1) ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $index; ?>">
                            <?php echo $carouselItems[$index]['question']; ?>
                        </button>
                    </h2>
                    <div id="flush-collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo ($index === count($carouselItems) - 1) ? 'show' : ''; ?>" data-bs-parent="#accordionFlushExample11">
                        <div class="accordion-body"><?php echo $carouselItems[$index]['answer']; ?></div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>