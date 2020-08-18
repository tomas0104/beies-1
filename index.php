    <?php
    session_start();
    if (isset($_SESSION["sesion_beies"])) {
      header('Location: /views/inicio');
    }
    ?>

    <!doctype html>
    <html class="no-js" lang="">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BEIES | UCC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/notika-custom-icon.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">        
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      </head>
      <body>
        <div class="content">
            <div class="login-content">
              <div class="nk-block toggled" id="l-login">
                <form id="form-login" onsubmit="return ValidarUsuario()" method="POST" autocomplete="off">
                  <div class="nk-form">
                    <div class="input-group">
                      <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                      <div class="nk-int-st">
                        <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="Correo" id="textCorreo" placeholder="Enter your email" required>
                      </div>
                    </div>
                    <div class="input-group mg-t-15">
                      <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                      <div class="nk-int-st">
                        <input type="password" class="form-control" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Enter your password" name="Password"  id="textPass" required>
                      </div>
                    </div>
                    <br>
                    <div class="input-group mg-t-15">
                      <input type="submit"  id="btn-entrar" class="btn btn-success  btn-block" value="Entrar" style="margin-left: 7rem; background: #00abc8; color: white"></input>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <script src="js/jquery-2.2.4.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/main.js"></script>
          <script src="ajax/usuario.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      </body>
  </html>