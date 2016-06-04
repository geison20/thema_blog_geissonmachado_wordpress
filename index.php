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
        
        <!-- bloco mail business -->
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center indigo-text"><i class="material-icons">business</i></h2>
            <h5 class="center">Speeds up development</h5>
            <!-- Scroolspy para produtos -->
            <span  class="scrollspy" id="servicos"></span>
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

 <section class="section no-pad-bot card-panel teal" id="index-banner">
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


  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 id="teste" class="section scrollspy">Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_bloginfo('template_directory');?>/images/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>


<?php get_footer(); ?>
  
