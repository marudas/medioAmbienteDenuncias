function puntosRut(e,campo) {
    var contenido = $(campo).val();
    contenido = contenido.replace("-","");
    while (contenido.indexOf(".")!=-1){
        contenido = contenido.replace(".","");
    }
   var final="";
   for(i=contenido.length-1; i>=0; i--){
       switch (i) {
           case contenido.length-1:
               final ="-"+contenido.charAt(i) ;
               break;
           case contenido.length-5:
               final = contenido.charAt(i)+ "."+final ;
               break;
           case contenido.length-8:
               final =contenido.charAt(i) + "."+ final;
                break;
           default:
               final = contenido.charAt(i)+final;
               break;
       }

   }
   if(!validarRut(contenido)){
        campo.setCustomValidity("no valido");
   }else{
        campo.setCustomValidity("");
   }
   $(campo).val(final);
}
//validar rut
function validarRut(rut){
    rut = rut.replace("-","");
    while (rut.indexOf(".")!=-1){
        rut = rut.replace(".","");
    }
    var dv = rut.charAt(rut.length-1);
    dv = dv.toUpperCase();
    rut = rut.substr(0,rut.length-1);
    var suma=0,cont=2,dg;
    for (i =1; i<=rut.length;i++){
        dg = rut.charAt(rut.length-i);
        suma = suma + dg*cont;
        if(cont < 7){
            cont++;
        }else cont =2;
    }
    suma =  suma%11;
    suma = 11-suma;
    if(suma==11)suma =0;
    if(suma==10)suma='K';
    if(suma == dv){
        return true;
    }else return false;
}

function numeros(e,campo){
        var contenido = $(campo).val();
        var ultimo = contenido.charAt(contenido.length-1);
        if ((e.key < '0' || e.key > '9')
            && ((e.key != "K" && e.key != "k") || contenido.length <= 6)
            && e.charCode != 0){
            return false;
        }else{
            return true;
        }
}






