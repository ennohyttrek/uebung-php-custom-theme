<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class( 'class-name' ); ?>>
    <h1><?php bloginfo('title'); ?></h1>

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

    <footer>
        <?php wp_footer() ?>
    </footer>
</body>

</html>
