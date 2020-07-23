<?php get_header(); ?>
<?php
	/* header pro podstránku se načítá ze souboru sub-header.php */
	require 'sub-header.php';
?>

<div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <section>
        <div class="bonus">
           
               
                <div class="seznam">
                    <ul type="disc">
                        <li><a href="#">hladká mouka 420g</a></li>
                        <li><a href="#">cukr krystal 150g</a></li>
                        <li><a href="#">vejce</a>
                            <ul type="circle">
                                <li><a href="#">med</a></li>
                                <li><a href="#">mléko</a></li>
                                <li><a href="#">jedlá soda 1 lžička</a>
                                    <ul type="square">
                                        <li><a href="#">20% zakysaná smetana</a></li>
                                        <li><a href="#">cukr moučka 50g</a></li>
                                        <li><a href="#">extra med</a></li>
                                    </ul>
                                </li>    
                            </ul>   
                        </li>
                        <li><a href="#">máslo</a></li>
                    </ul>
                </div>
                <div class="seznamPopis">
                    <h2>Postup pripravy</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis leo vel ex vestibulum consectetur. Vestibulum quis enim est. Vestibulum fermentum sapien eget nunc iaculis luctus. Praesent ipsum massa, vulputate id venenatis sit amet, laoreet et purus. Cras venenatis placerat lacinia. Vivamus posuere interdum risus. Praesent erat orci, suscipit non libero at, mollis sollicitudin turpis. Praesent sollicitudin arcu est, vel tristique erat luctus nec. Integer nec nulla et orci fermentum interdum.</p>

                    <p>Praesent ut turpis a lacus finibus lobortis. Cras interdum sem vitae lectus feugiat, et vulputate orci rutrum. Aenean ultrices hendrerit nisi eu suscipit. Etiam condimentum erat sem, sed vehicula mi condimentum sed. Vivamus vel risus vel elit posuere efficitur. Donec dapibus suscipit venenatis. Maecenas vel bibendum leo. In et lectus urna. Curabitur volutpat nulla vel lectus tempus, commodo porta lectus pretium. Mauris in porta massa. Pellentesque eros augue, pulvinar sed vestibulum elementum, suscipit eget augue. Phasellus at accumsan lacus, venenatis pulvinar purus. Etiam semper eleifend tortor, nec interdum mauris aliquam in.</p>
                        
                    <p>Nulla cursus odio non nisl semper rhoncus. Nulla leo sapien, pellentesque non bibendum in, malesuada ut nisl. Quisque congue neque nec bibendum vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tristique risus eu ante semper aliquam. Ut accumsan dolor non efficitur auctor. Suspendisse congue leo vitae ligula egestas, a ullamcorper turpis rutrum. Aliquam accumsan tristique nunc, ut pretium ligula vestibulum a. Aenean a dui in sapien ultrices iaculis.</p>

                    <h2>Rada na zaver</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat purus vel orci ultrices, ac dictum lorem placerat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ac luctus felis. Pellentesque molestie varius orci a congue. Aenean vitae tortor tincidunt est dictum volutpat accumsan vitae quam. Donec rhoncus, metus at laoreet malesuada, sapien dui mollis dui, et tincidunt mauris erat in velit. Duis cursus in enim at semper. Donec vehicula magna neque, sed pharetra mi commodo faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean rutrum mollis tortor id mollis. Donec ullamcorper libero maximus lectus accumsan dictum. Cras elementum convallis lobortis. Integer malesuada dolor eget nulla faucibus efficitur. Aliquam erat volutpat. Mauris sit amet gravida eros.</p>
                </div>
          
        </div>
    </section>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
