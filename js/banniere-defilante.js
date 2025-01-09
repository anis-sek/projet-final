(function($){

  $('.banniere').each(function(){

    var element = $(this);
    var nombre_enfant = $(this).children("img").length;
    
    if(nombre_enfant>1){

      var en_cours = 0;
      element.children("img").hide();
      element.children("img").eq(en_cours).show();

      element.append("<div class='banniere_suivant'></div><div class='banniere_precedent'></div>");
      var suivant = $(".banniere_suivant");
      var precedent = $(".banniere_precedent");
      suivant.show();
      
      element.everyTime(4000, "banniere" , function(i) {

        element.children("img").eq(en_cours).fadeOut(500);

        en_cours++;
        if(en_cours==nombre_enfant) en_cours = 0;

        element.children("img").eq(en_cours).fadeIn(500);

      });

      
      
    }
    
  });

})(jQuery);