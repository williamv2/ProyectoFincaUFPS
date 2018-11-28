$(document).ready(function(){
            $('#dashboard').click(function() {
                
                 $('#dash').fadeIn(500) && $('#visi').fadeOut(300) && $('#practi').fadeOut(500) && $('#uni').fadeOut(300) && $('#ani').fadeOut(300) && $('#proyec').fadeOut(300);
            })
            $('#visitantes').click(function() {
                
                 $('#visi').fadeIn(500) && $('#dash').fadeOut(300) && $('#practi').fadeOut(300) && $('#uni').fadeOut(300) && $('#ani').fadeOut(300) && $('#proyec').fadeOut(300);
            })
            $('#practicantes').click(function() {
                
                 $('#practi').fadeIn(500) && $('#dash').fadeOut(300) && $('#visi').fadeOut(300)&& $('#uni').fadeOut(300) && $('#ani').fadeOut(300) && $('#proyec').fadeOut(300);
            })
            $('#unidades').click(function() {
                
                 $('#uni').fadeIn(500) && $('#dash').fadeOut(300) && $('#visi').fadeOut(300) && $('#practi').fadeOut(300) && $('#ani').fadeOut(300) && $('#proyec').fadeOut(300);
            })
            $('#animales').click(function() {
                
                 $('#ani').fadeIn(500) && $('#dash').fadeOut(300) && $('#visi').fadeOut(300) && $('practi').fadeOut(300) && $('#uni').fadeOut(300) && $('#proyec').fadeOut(300);
            })
            $('#proyectos').click(function() {
                
                 $('#proyec').fadeIn(500) && $('#dash').fadeOut(300) && $('#visi').fadeOut(300) && $('#practi').fadeOut(300) && $('#uni').fadeOut(300) && $('#ani').fadeOut(300);
            })
      })
