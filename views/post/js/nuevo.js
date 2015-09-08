$(document).ready(function(){
    $('#form1').validate({
        rules:{
            nombre:{
                required: true
            },
             apellido:{
                required: true
            },
            email:{
                required: true
            },
             fechanac:{
                required: true
            }
        },
        messages:{
            nombre:{
                required: "Debe introducir el nombre "
            },
             apellido:{
                required: "Debe introducir el apellido"
            },
            email:{
                 required: "Debe introducir el email"
            },
             fechanacimiento:{
                 required: "Debe introducir el fechanacimiento"
            }
        }
    });
});