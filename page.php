<?php get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

              <h1>
              <?php
                $title = get_field('page_title');
                echo $title;
                ?>
                </h1>

    </div>
</section>

<?php get_footer();?>