<?php
/*  
Template Name: Subpage: Kontakt
Template Post Type: page 
*/
get_header(); ?>
<main class="s">
    <section id="contentHeader" class="s-header">
        <div class="container">
            <?php breadcrumbs(); ?>
            <div class="row align-items-center s-header-row">
                <div class="col-12 col-md-10 mx-auto acf-block acf-block--offcolor">
                    <div class="ro">
                        <div class="col-12 col-md-6 col-lg-5">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>