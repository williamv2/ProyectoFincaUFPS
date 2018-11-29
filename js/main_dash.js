function validarlogin() {
    
    var usuario, contraseña, expresion;

    usuario = document.getElementById('username').value;
    contraseña = document.getElementById('pwd').value;

    expresion = /[^A-Za-z0-9]/;

    if(usuario === "" || contraseña === ""){

        alert("Debe ingresar un usuario y contraseña");
        return false;
    }
    else if (usuario.length>30 || contraseña.length>50) {

        alert("Nombre de usuario y contraseña no validos");
        return false;

    }
    else if (expresion.test(contraseña) || expresion.test(usuario)) {

        alert("Nombre de usuario y contraseña no validos");
        return false;
    }
}

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
