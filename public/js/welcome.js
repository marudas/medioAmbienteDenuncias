$(function () {
    $('#rutDenunciante').keyup(function() {        
        rut = $('#rutDenunciante').val();
        if(rut!="" && validarRut(rut)){
            $('#nombreDenunciante').val();
            $('#celularDenunciante').val();
            $('#direccionDenunciante').val();
            $('#correoDenunciante').val();
            url = "denunciante/find/";
            url = url.concat(rut);
            $.ajax({
                url: url,
                type: 'get',
            }).done(function(response) {
                console.log(response);
                if(response!=false){
                    $('#nombreDenunciante').val(response['nombreDenunciante']);
                    $('#celularDenunciante').val(response['celularDenunciante']);
                    $('#direccionDenunciante').val(response['direccionDenunciante']);
                    $('#correoDenunciante').val(response['correoDenunciante']);
                }
            });	
        }
    });







    ////modulo de prueba para eliminar filas de una tabla
    $('.btn-delete').click(function(e) {  
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
    });
    
});