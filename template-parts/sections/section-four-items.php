<?php
$section_id = get_sub_field('section_id');
$section_title = get_sub_field('section_title');
$section_text = get_sub_field('section_text');
$item_title_1 = get_sub_field('item_title_1');
$item_title_2 = get_sub_field('item_title_2');
$item_title_3 = get_sub_field('item_title_3');
$item_title_4 = get_sub_field('item_title_4');
$item_text_1 = get_sub_field('item_text_1');
$item_text_2 = get_sub_field('item_text_2');
$item_text_3 = get_sub_field('item_text_3');
$item_text_4 = get_sub_field('item_text_4');
$item_image_1 = get_sub_field('item_image_1');
$item_image_1_4k = get_sub_field('item_image_1_4k');
$item_image_2 = get_sub_field('item_image_2');
$item_image_2_4k = get_sub_field('item_image_2_4k');
$item_image_3 = get_sub_field('item_image_3');
$item_image_3_4k = get_sub_field('item_image_3_4k');
?>
<style>
<?php if($item_image_1) : ?>
.section-part-1 {
    background-image: url('<?php echo $item_image_1;  ?>');
}
<?php endif; ?>

<?php if($item_image_1_4k) : ?>
@media (min-width: 1925px) {
    .section-part-1 {
        background-image: url('<?php echo $item_image_1_4k;  ?>');
    }
}
<?php endif; ?>

<?php if($item_image_2) : ?>
.section-part-2 {
    background-image: url('<?php echo $item_image_2;  ?>');
}
<?php endif; ?>

<?php if($item_image_2_4k) : ?>
@media (min-width: 1925px) {
    .section-part-2 {
        background-image: url('<?php echo $item_image_2_4k;  ?>');
    }
}
<?php endif; ?>

<?php if($item_image_3) : ?>
.section-part-3 {
    background-image: url('<?php echo $item_image_3;  ?>');
}
<?php endif; ?>

<?php if($item_image_3_4k) : ?>
@media (min-width: 1925px) {
    .section-part-3 {
        background-image: url('<?php echo $item_image_3_4k;  ?>');
    }
}
<?php endif; ?>
</style>
<section id="<?php echo $section_id; ?>" class="section section-four-items">
    <div class="container-1900">
        <h2 class="section-title text-center"><?php echo $section_title; ?></h2>
        <div class="section-content-615 text-center center">
            <?php echo $section_text; ?>
        </div>
        <div class="section-parts">
            <div class="section-part section-part-1">
                <div class="container">
                    <div class="section-part-content section-part-content-right">
                        <h3><?php echo $item_title_1; ?></h3>
                        <?php echo $item_text_1; ?>
                    </div>
                </div>
            </div>
            <div class="section-part section-part-2">
                <div class="container">
                    <div class="section-part-content section-part-content-left">
                        <h3><?php echo $item_title_2; ?></h3>
                        <?php echo $item_text_2; ?>
                    </div>
                </div>
            </div>
            <div class="section-part section-part-3">
                <div class="container">
                    <div class="section-part-content section-part-content-right">
                        <h3><?php echo $item_title_3; ?></h3>
                        <?php echo $item_text_3; ?>
                    </div>
                </div>
            </div>
            <div class="section-part">
                <div class="container section-part-4">
                    <div class="section-part-content section-content-center">
                        <h3><?php echo $item_title_4; ?></h3>
                        <?php echo $item_text_4; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>