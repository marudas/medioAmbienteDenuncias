@extends('layouts.app')

@section('content')

<!-- Contenedor con clase de bootstrap que realizarÃ¡ la funciÃ³n de centrar toda la informaciÃ³n contenida dentro de este mismo contenedor -->
<div class="container">
    <!-- Clase de bootstrap que encierra todo la informaciÃ³n en un cuadro -->
    <div class="card" style="margin-top: 5em;">
        <!-- Inicio de formulario que consultara los datos a la bd y los mostrarÃ¡ -->
    <form action="{{route('denuncias.buscar')}}" method="get" onsubmit="return showLoad()">
         <div class="card-body">
             

            <center>
             <h2 style="font-family:dolce;">Buscador</h2><hr style="width: 50%;">
                <br>
                <!-- Campo que se le mostrarÃ¡ a la persona el cuÃ¡l podrÃ¡ ingresar el cÃ³digo de seguimiento para que se -->
                <input type="text" name="rut" style="text-align: center;" class="form-control col-md-7" minlength="8" maxlength="10" onpaste="false"  placeholder="ingrese el rut " required="required" onkeypress="return numeros(event,this)" onfocusout="puntosRut(event,this)">
                    

        
            <br>
            <!-- BotÃ³n que enviarÃ¡ los datos ingresados por la persona que realizÃ³ la consulta -->
            <button type="submit" class="btn btn-success">Buscar </button>
          
   </form>
   <!-- Termino de formulario -->
</div>

</div>
</div>
            </center>
    <!-- check if $buscar variable is set, display buscar result -->
    <br>
    @if (isset($buscar))
        <div class="container">
             <div class="card">
                <div class="card-body">
                    <h2 style="font-family: dolce; text-align: center; font-size: 30px;">Resultado de búsqueda</h2><hr style="width: 50%;">

<!-- tabla -->

                <table class="table table-hover" style="font-family: arial; font-size: 15px;">
                  <thead style="background-color: #464646; color: white;">
                    <tr>
                      
                      <th scope="col" style="text-align: center;">Tipo de persona</th>
                      <th scope="col" style="text-align: center;">Rut</th>
                      <th scope="col" style="text-align: center;">Nombre</th>
                      <th scope="col" style="text-align: center;">Dirección</th>
                      
                      <th scope="col" style="text-align: center;">Estado</th>

                      
                      
                    </tr>

                  </thead>
                  <tbody>

                    
                    <tr>

                      @foreach($buscar as $buscars)
                     
                      
                       <td  style="text-align: center;">{{$buscars->tipo_persona}}
                       </td>
                       <td  style="text-align: center;">
                        
                        {{$buscars->rut}}
                       </td>
                      <td style="text-align: center;">{{$buscars->nombre}}</td>
                      <td style="text-align: center;">{{$buscars->direccion}}</td>
                      
                      <td style="text-align: center;">{{$buscars->estado}}</td>
                       
                       
                    
                        
                         
                        
                    
                    </tr>
                     

                  
                    
                    @endforeach
                  </tbody>
                </table>

<!-- tabla -->



                </div>   

                <center><a href="{{route('oirs.busqueda')}}" class="btn btn-info" style="font-family: cambria">Restablecer búsqueda</a></center>
                <br>
            </div>


        </div>

        
    @endif

    @stop