<?php
//Template Name: Blog
get_header();?>
<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'sub-header.php';
?>
        <section>
            <div class="container">
                <div class="tlacitka">
                <h1><?php the_title(); ?></h1>
                <?php dynamic_sidebar( 'widget_novinky' ); ?>
                
                <?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
             
            <div class="blog">   
            <a class="obr-blog" href="<?php the_permalink(); ?>"><?php if (
                has_post_thumbnail() ) { the_post_thumbnail('full');} else {echo '<img
                src="'.get_template_directory_uri().'/img/cat.jpg"
                alt="obrazek"/>';} ?></a>

                <div class="blogText">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <span><i class="far fa-clock"></i><?php the_time( get_option('date_format' ) ); ?></span>
                    <span><i class="fas fa-tags"></i><?php the_category(', '); ?></span>

                    <?php the_excerpt(); ?>
                    <a class="button" href="<?php the_permalink(); ?>">Přečíst <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>     
              
                
            <?php endwhile; ?>

            <span class="older"><?php next_posts_link('Starší <i class="fas fa-angle-right"></i>'); ?></span>
            <span class="newer"><?php previous_posts_link('<i class="fas fa-angle-left"></i> Novější'); ?></span>

        

            <?php wp_reset_query(); ?>

          
            </div>
            </div>
        </section>
<?php get_footer(); 

