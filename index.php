<?php get_header(); ?>




  <div class="container" >
    <div class="section">

      <!--   Icon Section 1   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center  deep-orange-text"><i class="material-icons">desktop_mac</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text"><i class="material-icons">phone_android</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>
        
        <span  class="scrollspy" id="servicos"></span>
        
        <!-- bloco mail business -->
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center indigo-text"><i class="material-icons">business</i></h2>
            <h5 class="center">Speeds up development</h5>
            <!-- Scroolspy para produtos -->
            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>
      </div>

      <!--   Icon Section 2  -->
      <div class="row ">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center red-text"><i class="material-icons">color_lens</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">public</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">mail_outline</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <section class="section no-pad-bot card-panel red accent-2" id="index-banner">
      <div class="container scrollspy" id="blog">
        <h1 class="header center white-text">Blog de Tecnologia</h1>
      </div>
      <br>
  </section>
  <div class="container" >
    <div class="section">
      <div class="row">
        <div class="col s12 center">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col s12 m4">
                      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      <p class="center"><?php the_content('<br>Continue lendo ...'); ?></p>
                      <p class="center">Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></p>
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

  <section class="section no-pad-bot card-panel teal" id="index-banner" style="margin-bottom: 0;">
    <div class="container">
      <br><br>
      <h2 class="header center white-text">Entre em contato</h2>

      <span id="contato" class="scrollspy"></span>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="digite seu nome" id="first_name" type="text" class="validate" length="100">
              <label for="first_name">Nome</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="digite seu email" id="email" type="email" class="validate">
              <label for="email" data-error="email inválido" data-success="email correto" length="100" >Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" length="500"></textarea>
              <label for="textarea1">Textarea</label>
            </div>
          </div>
          <div class="row">
            <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar</button>
          </div>
        </form>
      </div>

      <br><br>
    </div>
 </section>

 <!-- SOCIAL MIDIAS -->
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large blue">
      <i class="material-icons">person_add</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>

<?php get_footer(); ?>
  
