<?php get_header(); 

//Template Name: Bez Containeru
?>
<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'sub-header.php';
?>

<?php while ( have_posts() ) : the_post(); ?>
<h1 id="nahoru"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>


<?php get_footer(); ?>