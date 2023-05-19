<?php
$section_id = get_sub_field('section_id');
$section_title = get_sub_field('section_title');
$section_text = get_sub_field('section_text');
$button_label = get_sub_field('button_label');
$button_link = get_sub_field('button_link');
?>
<section id="<?php echo $section_id; ?>" class="section section-listings">
    <div class="container">
        <h2 class="section-title text-center"><?php echo $section_title; ?></h2>
        <div class="section-content-615 text-center">
            <?php echo $section_text; ?>
        </div>
        <?php if ($button_link) : ?>
            <div class="text-center">
                <a href="<?php echo $button_link; ?>" class="btn"><?php echo $button_label; ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>