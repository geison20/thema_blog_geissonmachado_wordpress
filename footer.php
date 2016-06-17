<footer class="page-footer teal">
        
	<div class="container">
      <div class="row white-text">
        <div class="col l7 s6">
          <p>
	          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-desc') ) : ?>
	          <?php endif; ?>	
          </p>
        </div>

        <div class="col l5 s6">
	        <h5>Mídias Sociais</h5>
	        <div class="row">
	        	<div class="col 2"><a class="white-text" target="__blank" href="<?php echo get_the_author_meta( 'facebook_profile' ); ?>"><i class="fa fa-facebook-square fa-3x" aria-hidden="true" ></i></a></div>
	        	<div class="col 2"><a class="white-text" target="__blank" href="<?php echo get_the_author_meta( 'linkedin_profile' ); ?>"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a></div>
	        	<div class="col 2"><a class="white-text" target="__blank" href="<?php echo get_the_author_meta( 'google_profile' ); ?>"><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a></div>
	        	<div class="col 2"><a class="white-text" target="__blank" href="<?php echo get_the_author_meta( 'github_profile' ); ?>">
	        	<i class="fa fa-github fa-3x" aria-hidden="true"></i></a></div>
	        </div>
        </div>

      </div>
    </div>


    <div class="footer-copyright">
      <div class="container">
      <p class="left">Desenvolvido por Gêisson Machado Antunes</p>
      <div class="right">Copyright@<?php echo date('Y') ?></div>
      </div>
    </div>

</footer>

  </main>
  <?php wp_footer(); ?>
  </body>
</html>