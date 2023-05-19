<?php
$section_id = get_sub_field('section_id');
$section_title = get_sub_field('section_title');
$contact_form = get_sub_field('cf7_shortcode');
?>
<section id="<?php echo $section_id; ?>" class="section bg-gray">
    <div class="container">
        <h2 class="section-title text-center"><?php echo $section_title; ?></h2>
        <div class="section-form">
            <?php echo do_shortcode($contact_form); ?>
        </div>
    </div>
</section>