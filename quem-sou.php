

<section class="section grey lighten-5 scrollspy caption" id="sobre">
      <div class="container"><br><br>   
        <div class="row valign-wrapper">
          <div class="col s12 m8 light">

              <!-- Width quem sou 1 -->
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('quem-sou-1') ) : ?><?php endif; ?>
            
          </div>
          <div class="col s12 m4">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 200, '', 'texto de rel', ['class'=>['responsive-img','materialboxed',]] ); ?> 
          </div>
        </div>
        <br><br>
        <div class="divider"></div>
        <br><br>
        <div class="row valign-wrapper">
          <div class="col s12 m2">
              <img src="<?php bloginfo('template_url'); ?>/images/google-icon-computer-blue-dark.jpg" alt="" class="circle responsive-img"> 
          </div>
          <div class="col s12 m10 light">
              
              <!-- Width quem sou 2 -->
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('quem-sou-2') ) : ?><?php endif; ?>
    
          </div>
        </div><br><br>
      </div>
</section>
