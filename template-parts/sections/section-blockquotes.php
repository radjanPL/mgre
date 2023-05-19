<?php
$section_id = get_sub_field('section_id');
$section_title = get_sub_field('section_title');
?>
<section id="<?php echo $section_id; ?>" class="section section-says bg-gray">
    <div class="container">
        <h2 class="section-title text-center"><?php echo $section_title; ?></h2>
        <?php if (have_rows('blockquotes')): ?>
            <div class="section-cols">
                <?php while (have_rows('blockquotes')): the_row(); ?>
                    <div class="section-col">
                        <blockquote>
                            <?php the_sub_field('text'); ?>
                            <cite>– <?php the_sub_field('name'); ?></cite>
                        </blockquote>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>