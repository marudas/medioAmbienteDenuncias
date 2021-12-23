$(function () {
    $('#rutDenunciante').keyup(function() {        
        rut = $('#rutDenunciante').val();
        if(rut!="" && validarRut(rut)){
            url = "denunciante/find/";
            url = url.concat(rut);
            $.ajax({
                url: url,
                type: 'get',
            }).done(function(response) {
                if(response!=false){
                    $('#nombreDenunciante').val(response['nombreDenunciante']);
                    $('#celularDenunciante').val(response['celularDenunciante']);
                    $('#direccionDenunciante').val(response['direccionDenunciante']);
                    $('#correoDenunciante').val(response['correoDenunciante']);
                }else{
                    $('#nombreDenunciante').val("");
                    $('#celularDenunciante').val("");
                    $('#direccionDenunciante').val("");
                    $('#correoDenunciante').val("");
                }
            });	
        }
    });
    $("formWelcome").submit(function(e){
        correo = $('#correoDenunciante').val();
        if($("formWelcome").is(":valid") && correo !=""){    
            e.preventDefault();        
            url = "denunciante/buscarMail/";            
            rut = $('#rutDenunciante').val();
            url = url.concat(correo+"/"+rut); 
            $.ajax({
                url: url,
                type: 'get',
            }).done(function(response) {
                if(response == true){                    
                    $("formWelcome")[0].submit();
                }else{
                    var campo = document.getElementById("correoDenunciante");
                    campo.setCustomValidity("no valido");
                }
            });	
        }
    });





    ////modulo de prueba para eliminar filas de una tabla
   /*  $('.btn-delete').click(function(e) {  
        e.preventDefault();
        url = $(this).closest('form').attr('action');       console.log(url);
        tr = $(this).closest('tr');
        $.ajax({
            url: url,
            type: 'DELETE',
            data: {
                "_token": $("meta[name='csrf-token']").attr("content")
            },
        }).done(function(response) {
            console.log(response);
            tr.fadeOut(1000, function(){
                $(this).remove();
            });
        });	    
    }); */
    
});