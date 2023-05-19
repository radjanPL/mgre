<?php
$section_id = get_sub_field('section_id');
$section_title = get_sub_field('section_title');
?>
<section id="<?php echo $section_id; ?>" class="section bg-gray">
    <div class="container">
        <h2 class="section-title text-center"><?php echo $section_title; ?></h2>
        <?php if (have_rows('text_items')): ?>
            <div class="section-cols">
                <?php while (have_rows('text_items')): the_row(); ?>
                    <div class="section-col">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <?php the_sub_field('text'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>