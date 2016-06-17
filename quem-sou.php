

<section class="section grey lighten-5 scrollspy caption" id="sobre">
      <div class="container"><br><br>   
          <div class="row">

            <h1 class="light" >Sobre</h1>
            <div class="divider"></div>
            <br>
          
            <div class="col s12 m8">
                <!-- Width quem sou 1 -->
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('quem-sou-1') ) : ?><?php endif; ?>
              
            </div>
            <div class="col s12 m4 hide-on-small-only">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 200, '', 'texto de rel', ['class'=>['responsive-img','materialboxed',]] ); ?> 
            </div>
          </div>
        
        
        </div>
      </div>
</section>
