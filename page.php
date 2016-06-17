<?php get_header(); 
get_template_part('navbar');  
?>


<article class="container">
    <section class="section">
        <header>
            <h1><?php the_title(); ?></h1>
            <h2>Entre em contato</h2>
        </header>


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content('<br>Continue lendo ...'); ?>

            <?php the_permalink();  ?>
            <?php endwhile?>
            <?php else: ?>
              <!-- SE NAO EXITIR POST VAI AAQUI -->
            <?php endif; ?>


    </section>
</article>



      
  
<?php 
get_footer(); ?>
  
