<?php get_header(); ?>

<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="blue" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><i class="material-icons">desktop_mac</i></a>
      <ul class="right hide-on-med-and-down ">
        <li><a href="<?php echo site_url(); ?>">Voltar</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="#">teste4</a></li>
      </ul>
    </div>
  </nav>  
</div>
<?php get_sidebar(); ?>

<div class="container" >
    <div class="section">
      <div class="row">
        <div class="col s12 center">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col s12">
                      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      <p class=""><?php the_content(); ?></p>
                      <p class="center">Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></p>
                       <?php comments_template(); ?>
                    </div>
            <?php endwhile?>
                  <div class="row">
                    <div class="right"><?php next_posts_link('Posts anteriores') ?></div>
                    <div class="left"><?php previous_posts_link('Posts recentes') ?></div>
                  </div>
            <?php else: ?>
                 
            <?php endif; ?>
        </div>
      </div>

    </div>
</div>

<?php get_footer(); ?>