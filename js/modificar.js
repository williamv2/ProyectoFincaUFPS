// Funcion para Modificar

function modificarvisi(numero, fechaing, motivo, placa, nombres, institucion) {

        document.getElementById('num_vis').value = numero;
        document.getElementById('numero_vis').value = numero;
        document.getElementById('mfechaing_visi').value = fechaing;
        document.getElementById('mplaca_visi').value = placa;
        document.getElementById('mnombres').value = nombres;
        document.getElementById('minst_visi').value = institucion;
        document.getElementById('mmotivo_visi').value = motivo;
         
}

function modificarpracti(numero, fechaini, fechafin, nombres, nombrepro, semestre, institucion) {

        document.getElementById('num_pract').value = numero;
        document.getElementById('numero_pract').value = numero;
        document.getElementById('mfechaini_pract').value = fechaini;
        document.getElementById('mfechafin_pract').value = fechafin;
        document.getElementById('mnombrepro_pract').value = nombrepro;
        document.getElementById('mnombres_pract').value = nombres;
        document.getElementById('minst_pract').value = institucion;
        document.getElementById('msem_pract').value = semestre;
         
}

function modificaruni(codigo, nombre, numAnimales, descripcion, area) {

        document.getElementById('cod_uni').value = codigo;
        document.getElementById('codigo_uni').value = codigo;
        document.getElementById('mnombres_uni').value = nombre;
        document.getElementById('mnumani_uni').value = numAnimales;
        document.getElementById('mdesc_uni').value = descripcion;
        document.getElementById('marea_uni').value = area;
                
}

function modificarani(codigo, nombre, desc, fechaing, unidad, genero, tama, especie, cantali) {

        document.getElementById('cod_ani').value = codigo;
        document.getElementById('codigo_ani').value = codigo;
        document.getElementById('mnombres_ani').value = nombre;
        document.getElementById('mdesc_ani').value = desc;
        document.getElementById('mfechaing_ani').value = fechaing;
        document.getElementById('muni_ani').value = unidad;
        document.getElementById('mgenero_ani').value = genero;
        document.getElementById('mtam_ani').value = tama;
        document.getElementById('mesp_ani').value = especie;
        document.getElementById('mali_ani').value = cantali;
                
}

function modificarpro(numero, nombre, descripcion, unidad) {

        document.getElementById('mnum_pro').value = numero;
        document.getElementById('numero_pro').value = numero;
        document.getElementById('mnombre_pro').value = nombre;
        document.getElementById('mdesc_pro').value = descripcion;
        document.getElementById('mnum_unidad').value = unidad
                
}
