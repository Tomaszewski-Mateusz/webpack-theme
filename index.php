<?php get_header(); ?>

<?php get_template_part('template-parts/subpage', 'header'); ?> ?>
    <section class="gap">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
<?php get_footer(); ?>