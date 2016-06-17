<?php 

get_header(); 
get_template_part('navbar');  
get_template_part('panel-header');
get_template_part('produtos');
?>

  <section class="section no-pad-bot card-panel red accent-2" id="index-banner">
      <div class="container scrollspy" id="blog">
        <h2 class="header center white-text">Blog de Tecnologia</h2>
        <div class="divider"></div>
      
        
    <div class="section">
      <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="col s12 m4 light caption">
                <div class="card large">
                  <div class="card-image">
                      
                      <?php if(has_post_thumbnail( )): ?>
                          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(['400','400']); ?>
                          </a>
                      <?php else: ?>  
                          <img alt="" src="<?php echo get_template_directory_uri() ?>/images/pc-icon.png" />
                      <?php endif; ?>
                      
                  </div>
                  <div class="card-content">
                      <span class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
                      <p class="center"><?php the_content('<br>Continue lendo ...'); ?></p>
                  </div>
                  <div class="card-action">
                    <div class="center">
                      <?php echo get_avatar( get_the_author_meta( 'ID' ), 50, '', 'texto de rel', ['class'=>['responsive-img','circle',]] ); ?>
                      <?php //echo get_the_author_meta('description'); ?>
                      <p class="center">Postado por <?php the_author(); ?></p>
                      <span class="center"><?php the_time('d/M/Y') ?></span>
                    </div>
                  </div>
                </div>
              </div>
            
            <?php endwhile?>
            <?php else: ?>


              <!-- SE NAO EXITIR POST VAI AAQUI -->

                 
            <?php endif; ?>


      </div>
      
      <!-- PAGINATION POST -->
      <div class="row">
          <div class="right"><?php next_posts_link('posts anteriores') ?></div>
          <div class="left"><?php previous_posts_link('posts recentes') ?></div>
      </div>

    </div>
  

      </div>
      <br>
  </section>
  
<?php 
// get_template_part('social-midia');
get_template_part('quem-sou');
get_template_part('contato');
get_footer(); ?>
  
