<?php get_header(); ?>

<header>
    <h1><?php bloginfo('title'); ?></h1>
    <p>Index</p>
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

        <figure class="image my-featured-image">
            <?php echo the_post_thumbnail( 'thumbnail' )?>
        </figure>

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
