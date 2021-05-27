<?php get_header(); ?>

<header>
    <h2><?php bloginfo('title'); ?></h2>
    <p>Singular</p>
</header>

<nav class="main-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</nav>



<main>
    <!-- Loop starts -->

    <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
    ?>

    <article>

        <h1><?php the_title(); ?></h1>
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
