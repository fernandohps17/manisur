<?php
if (isset($_SESSION['mail'])) {
    echo '<link rel="stylesheet" href="/public/css/main.css">';

    if ($_SESSION["mail"] === 1) {
        echo "<div class='modal'>
          <div class='content_modal'>
            <div class='text textCenter'>
            <p>El mensaje se ha enviado correctamente. En breve nos pondremos en contacto con usted. Gracias.</p>
            </div>
          </div>
          </div>";
    } else {
        echo "<div class='modal'>
          <div class='content_modal'>
          <div class='text textCenter'>
            <p>El mensaje se ha enviado correctamente. En breve nos pondremos en contacto con usted. Gracias.</p>
          </div>
          </div>
        </div>";
    }
    echo '<script src="/public/js/modal.js"></script>';

    session_destroy();
}
