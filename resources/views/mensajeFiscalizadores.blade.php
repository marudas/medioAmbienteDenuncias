<!DOCTYPE html>
<html>
 <head>
  <title>Message</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 </head>
 <body>
  <div>
    <img id="img" src="{{ url('/img/logo-correo2.png') }}">
    <br><br>
      <p>
        Estimado(a)
        <br><br>
        Se ha ingresado una nueva denuncia en el portal de fiscalización, con código: <h3><b> {{ $data['message'] }} </b> </h3>
        <br><br>
        Por favor revisar.
        <br><br>
      </p>
  </div>
</body>
</html>