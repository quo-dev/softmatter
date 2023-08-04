<?php
$title = get_field('title');
$sub_title = get_field('sub_title');
$contents = get_field('contents');
$background_color = get_field('background_color');
?>

<div class="tpl-block faqs-block bg-<?php echo $background_color; ?>">
    <div class="container">
        <h2 class="h3 faqs-title">
            <?php echo $title; ?>
        </h2>
        <?php if ($contents) { ?>
            <div class="accordion accordion-flush" id="accordionFlushExample">
            <?php foreach ($contents as $content) {
                $randomkey = rand();
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $randomkey?>" aria-expanded="false" aria-controls="flush-collapseOne">
                            <?php echo $content['question']?>
                        </button>
                    </h2>
                    <div id="flush-collapse-<?php echo $randomkey?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php echo $content['answer']?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>