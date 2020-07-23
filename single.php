<?php get_header(); ?>
<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'single-header.php';
?>

    <div class="prispevek">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>

                <div class="ikony">
                <span>
                        <i class="far fa-clock"></i> <?php the_time( get_option('date_format' ) ); ?>
                    </span>
                    <span>
                        <i class="fas fa-tags"></i> <?php the_category(', '); ?>
                    </span>
                </div>

                <?php the_content(); ?>
                
                <a href="<?php echo get_option('home'); ?>/blog" class="button">Zpět na Blog <i class="fas fa-angle-double-right"></i></a>
            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer(); 
