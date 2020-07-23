<?php get_header(); ?>
<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'sub-header.php';
?>
    <div class="container">
        <div class="tlacitka">

        <?php if ( have_posts() && strlen( trim(get_search_query()) ) != 0 ) : ?>

        
            <h1><?php printf( __( 'Výsledky hledání pro dotaz: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

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
            
            <h1><?php printf( __( 'Výsledky hledání pro dotaz: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

                <h2>Nic nenalezeno</h2>
                <p>Zdá se, že se hledaný dotaz na webu nenachází. Pokuste se hledání opakovat s jiným dotazem.</p>

                
                    <?php get_search_form(); ?>
               

        <?php endif ;?>
    </div>
    </div>

<?php get_footer(); ?>
