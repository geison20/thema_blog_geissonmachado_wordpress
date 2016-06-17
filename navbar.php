<!-- Navbar -->
<div class="navbar-fixed hide-on-med-and-down">
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="<?php echo site_url(); ?>" class="brand-logo">Gêisson Machado</a>
        <ul class="right hide-on-med-and-down ">
          <li><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('nav-menu') ) ?></li>
        </ul>
      </div>
    </nav>  
</div>
