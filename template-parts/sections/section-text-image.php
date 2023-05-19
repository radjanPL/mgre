<?php
$section_id = get_sub_field('section_id');
$section_title = get_sub_field('section_title');
$section_text = get_sub_field('section_text');
$section_image = get_sub_field('image');
$section_image_4k = get_sub_field('image_4k');
?>
<style>
<?php if ( $section_image ) : ?>
    #<?php echo $section_id; ?> {
        background-image: url(<?php echo $section_image; ?>);
    }
<?php endif; ?>
<?php if ( $section_image_4k ) : ?>
    @media screen and (min-width: 1925px) {
        #<?php echo $section_id; ?> {
            background-image: url(<?php echo $section_image_4k; ?>);
        }   
    }
<?php endif; ?>
</style>
<section id="<?php echo $section_id; ?>" class="section section-about">
    <div class="container">
        <div class="section-content-615">
            <h2 class="section-title"><?php echo $section_title; ?></h2>
            <div class="mt-60">
                <?php echo $section_text; ?>
            </div>
        </div>
    </div>
</section>