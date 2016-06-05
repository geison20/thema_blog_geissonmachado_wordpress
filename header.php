<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title><?php wp_title() ?></title>

  <?php wp_head();  ?>

</head>
<body>

<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><?php bloginfo('name'); ?> </a>
      <ul class="right hide-on-med-and-down ">
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="#">teste4</a></li>
      </ul>
    </div>
  </nav>	
</div>

<header class="section no-pad-bot card-panel blue" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center white-text">geisson.machado</h1>
      <div class="row center">
        <h5 class="header col s12 white-text light "><?php bloginfo('description'); ?>
        <br>
        <span class="typed-text-writer"></span>
        </h5>

      </div>
      <div class="row center">
        <a href="#" id="download-button" class="btn-large waves-effect waves-light blue lighten-1">Comece por aqui</a>
      </div>
      <br><br>
    </div>
</header>