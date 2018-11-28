$(document).ready(function(){
            $('#dashboard').click(function() {
                
                 $('[title=dashboard]').fadeIn(500) && $('[title=visitante]').fadeOut(200) && $('[title=practicante]').fadeOut(200) && $('[title=unidad]').fadeOut(200) && $('[title=animal]').fadeOut(200) && $('[title=proyecto]').fadeOut(200) && $('[title=informe]').fadeOut(200) && $('[title=produccion]').fadeOut(200);
            })
            $('#visitantes').click(function() {
                
                 $('[title=visitante]').fadeIn(500) && $('[title=dashboard]').fadeOut(200) && $('[title=practicante]').fadeOut(200) && $('[title=unidad]').fadeOut(200) && $('[title=animal]').fadeOut(200) && $('[title=proyecto]').fadeOut(200) && $('[title=informe]').fadeOut(200) && $('[title=produccion]').fadeOut(200);
            })
            $('#practicantes').click(function() {
                
                 $('[title=practicante]').fadeIn(500) && $('[title=dashboard]').fadeOut(200) && $('[title=visitante]').fadeOut(200)&& $('[title=unidad]').fadeOut(200) && $('[title=animal]').fadeOut(200) && $('[title=proyecto]').fadeOut(200) && $('[title=informe]').fadeOut(200) && $('[title=produccion]').fadeOut(200);
            })
            $('#unidades').click(function() {
                
                 $('[title=unidad]').fadeIn(500) && $('[title=dashboard]').fadeOut(200) && $('[title=visitante]').fadeOut(200) && $('[title=practicante]').fadeOut(200) && $('[title=animal]').fadeOut(200) && $('[title=proyecto]').fadeOut(200) && $('[title=informe]').fadeOut(200) && $('[title=produccion]').fadeOut(200);
            })
            $('#animales').click(function() {
                
                 $('[title=animal]').fadeIn(500) && $('[title=dashboard]').fadeOut(200) && $('[title=visitante]').fadeOut(200) && $('[title=practicante]').fadeOut(200) && $('[title=unidad]').fadeOut(200) && $('[title=proyecto]').fadeOut(200) && $('[title=informe]').fadeOut(200) && $('[title=produccion]').fadeOut(200);
            })
            $('#proyectos').click(function() {
                
                 $('[title=proyecto]').fadeIn(500) && $('[title=dashboard]').fadeOut(200) && $('[title=visitante]').fadeOut(200) && $('[title=practicante]').fadeOut(200) && $('[title=unidad]').fadeOut(200) && $('[title=animal]').fadeOut(200) && $('[title=informe]').fadeOut(200) && $('[title=produccion]').fadeOut(200);
            })
            $('#informes').click(function() {
                
                 $('[title=informe]').fadeIn(500) && $('[title=dashboard]').fadeOut(200) && $('[title=visitante]').fadeOut(200) && $('[title=practicante]').fadeOut(200) && $('[title=unidad]').fadeOut(200) && $('[title=animal]').fadeOut(200) && $('[title=proyecto]').fadeOut(200) && $('[title=produccion]').fadeOut(200);
            })
            $('#producciones').click(function() {
                
                 $('[title=produccion]').fadeIn(500) && $('[title=dashboard]').fadeOut(200) && $('[title=visitante]').fadeOut(200) && $('[title=practicante]').fadeOut(200) && $('[title=unidad]').fadeOut(200) && $('[title=animal]').fadeOut(200) && $('[title=proyecto]').fadeOut(200) && $('[title=informe]').fadeOut(200);
            })
      });

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
