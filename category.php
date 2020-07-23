<?php get_header();?>

<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'sub-header.php';
?>
<div class="container">
    <div class="tlacitka">

<h1>Výpis článků z rubriky: <?php echo '' . single_cat_title( '', false ) . ''; ?></h1>

<?php if ( have_posts() ) : ?>
    
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="blog">    
                
                <a class="obr-blog" href="<?php the_permalink(); ?>"><?php if (
    has_post_thumbnail() ) { the_post_thumbnail('full');} else {echo '<img
    src="'.get_template_directory_uri().'/img/smile.jpeg"
    alt="obrazek"/>';} ?></a>
    
                    <div class="blogText">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
                        <span>
                            <i class="far fa-clock"></i> <?php the_time( get_option('date_format' ) ); ?>
                        </span>
                        <span>
                            <i class="fas fa-tags"></i> <?php the_category(', '); ?>
                        </span>
    
                        <?php the_excerpt(); ?>
                        <a class="button" href="<?php the_permalink(); ?>">Přečíst <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>

        <?php endwhile; ?>

        <span class="older">
                <?php next_posts_link('Starší <i class="fas fa-hand-point-right"></i>'); ?>
            </span>
            <span class="newer">
                <?php previous_posts_link('<i class="fas fa-hand-point-left"></i> Novější'); ?>
            </span>
    

<?php else : ?>
   
        <p><?php _e( 'Žádné články zatím nejsou k dispozici...' ); ?></p>
    
<?php endif; ?>


</div>
</div>
<?php get_footer(); 
