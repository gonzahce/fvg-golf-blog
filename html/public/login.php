<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <base href="<?php echo APP_URL ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="views/app/js/login.js"></script>
  <script src="views/app/js/generales.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="form-signin" role="form" onkeypress="return runScriptLogin(event)">

    <label for="usrname_or_email" class="sr-only">Usuario o Email</label>
    <input type="text" id="user_login" placeholder="Introducir Email" class="form-control">

    <label for="psw" class="sr-only">Contraseña</label>
    <input type="password" id="pass_login" placeholder="Introducir Contraseña" class="form-control">

    <label>
      <input type="checkbox" value="1" id="session_login" checked>Recordarme
    </label>

    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="goLogin()">Iniciar Sesión</button>
  </div>
</div>

<div id="_AJAX_LOGIN_"></div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>