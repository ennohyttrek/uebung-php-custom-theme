<?php get_header(); ?>

    <header>
        <h1><?php bloginfo('title'); ?></h1>
    </header>

    <main>
        <!-- Loop starts -->

        <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    ?>

        <article>

            <h2><?php the_title(); ?></h2>
            <section>
                <?php the_content(); ?>
            </section>

        </article>

        <?php    
    endwhile; 
endif; 
?>

        <!-- Loop ends -->
    </main>


<?php get_footer(); ?>