<?php get_header(); ?>

<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'sub-header.php';
?>
    <div class="notFound">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/error404.jpg" alt="error 404">
            <p>Jejda, tahle adresa neexistuje.</p>
            <p class="btn"><a href="<?php echo get_option('home'); ?>/http://student8.primawebovky.cz/">Přejdi na Primakavarna.cz</a></p>
        </div>
    </div>
<?php get_footer(); ?>