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
        Estimado(a) {{ $data['destinatarios'] }}
        <br><br>
        Se ha ingresado su denuncia en el portal de fiscalización, para revisar su seguimiento debe hacerlo en mismo portal con su rut o el numero de denuncia {{ $data['message'] }}.
        <br><br>
        Saludos.
      </p>
  </div>
</body>
</html>