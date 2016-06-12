(function($){
  $(function(){

    
    /*
    |--------------------------------------------------------------------------
    | smoothScroll 
    |--------------------------------------------------------------------------
    |
    | Plugin para suavizar scroll.
    | 
    |
    */
    $.smoothScroll();

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
    | transit.JS 
    |--------------------------------------------------------------------------
    |
    | Plugin Jquery para fazer transicoes de tela
    | 
    | Dependencia do Jquery.
    | http://ricostacruz.com/jquery.transit/#top
    |
    */
    $.fx.speeds._default = 1200;

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
        strings: ['<strong>Desenvolvemos sua solução.</strong>'],
        contentType: 'html',
        typeSpeed: 0,
        callback: function() {
            $(".name-one").transition({ 
                y: -20,
                opacity: 1, 
            });
            $(".name-two").transition({ 
                y: -50,
                opacity: 1, 
            });
        },
    

    });

    /*
    |--------------------------------------------------------------------------
    | MaterialBox
    |--------------------------------------------------------------------------
    |
    | Materialize feature
    | 
    |
    */
    $('.materialboxed').materialbox();



  }); // end init document
})(jQuery);