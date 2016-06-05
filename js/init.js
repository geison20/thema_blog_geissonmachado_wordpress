(function($){
  $(function(){

    /*
    |--------------------------------------------------------------------------
    | ScrollSpy 
    |--------------------------------------------------------------------------
    |
    | Plugin para rolagem de item.
    | 
    | Materialize Framework Implements
    |
    */
    $('.scrollspy').scrollSpy();



    /*
    |--------------------------------------------------------------------------
    | TYPED.JS 
    |--------------------------------------------------------------------------
    |
    | Plugin Jquery para escrever em tela
    | 
    | Dependencia do Jquery.
    |
    */
    $(".typed-text-writer").typed({
        strings: ['<strong>Aplicacao Web</strong>','<strong>seu SEO</strong>'],
        contentType: 'html',
        typeSpeed: 0
    

    });



  }); // end init document
})(jQuery);