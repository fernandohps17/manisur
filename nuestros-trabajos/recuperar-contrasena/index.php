<?php
  session_start();
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/conexion.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/nuestros-trabajos/core/Controller/UsersController.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/PHPMailer/src/PHPMailer.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/PHPMailer/src/SMTP.php");

  list($password, $send_email) = get_password_and_email();

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = "smtp.ionos.es";
  $mail->Port = 587; 
  $mail->IsHTML(true);
  $mail->CharSet='UTF-8';
  $mail->Username = "formularios@servynet.es";
  $mail->Password = "Servynet064034$%&";
  $mail->SetFrom("formularios@servynet.es");
  // $mail->AddAddress($send_email);
  $mail->AddAddress("fernandohps17@gmail.com");
  // $mail->AddAddress("jose@virtualglobal.es");

  $mail->Subject = "RECUPERAR CONTRASEÑA - https://www.manisur.es/nuestros-trabajos/";
  $mail->Body = "	
  <html>
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WGXSDXD4');</script>
    <!-- End Google Tag Manager -->
    <title>HTML</title>
  </head>
  <body>
    <a href='https://www.manisur.es/'>
      <img src='https://www.manisur.es/public/img/logo-maisur.webp' alt='logo Manisur' title='logo Manisur'>
    </a>
    <h1>La contraseña es la siguiente:</h1>
    <p>$password</p>
  </body>
  </html>
    ";


  if($mail){
    $_SESSION['modal'] = true;
    $_SESSION['content_modal'] = "<p>La contraseña fue enviada al correo del administrador.</p>";
    
  }else{
    $_SESSION['modal'] = true;
    $_SESSION['content_modal'] = "<p>La contraseña no pudo ser enviada, intente de nuevo.</p>";
    
  };
  
  header("Location: /nuestros-trabajos/login/");

?>
