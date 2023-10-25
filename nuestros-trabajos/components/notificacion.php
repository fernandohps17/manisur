<?php
	
  function send_notification($name, $comentary, $email, $web, $url_post, $send_email){

    require_once($_SERVER["DOCUMENT_ROOT"]."/PHPMailer/src/PHPMailer.php");
    require_once($_SERVER["DOCUMENT_ROOT"]."/PHPMailer/src/SMTP.php");
    
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
    $mail->AddAddress($send_email);
    // $mail->AddAddress("miguelveperez54@gmail.com");
    //$mail->AddAddress("jose@virtualglobal.es");
  
    $mail->Subject = "COMENTARIO DE CLIENTE: ".$name." -  https://www.manisur.es/nuestros-trabajos";
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
        <img src='https://www.manisur.es/public/img/logo-manisur.jpg' alt='logo manisur' title='logo manisur'>
      </a>
      <h1>El siguiente cliente ha realizado un comentario un el trabajo:</h1>
      <p> </p>
  
      <h2>WEB: www.manisur.es/nuestros-trabajos</h2>
      <p> </p>	  
      <p><strong>Nombre Cliente: </strong>".$name."</p>
      <p><strong>Email: </strong>".$email."</p>
      <p><strong>Web: </strong>".$web."</p>
      <p><strong>Comentario del cliente: </strong>".$comentary."</p>
      <p></p>
      <p><strong>NOTA:</strong> asegurese de haber iniciado session en el blog para poder aprobar el comentario</p>
      <p><a href='".$url_post."'>Ir al post</a></p>
    </body>
    </html>
      ";
  
  
      $mail->Send();
  }
?>
