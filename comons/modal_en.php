<?php
if (isset($_SESSION['mail'])) {
    echo '<link rel="stylesheet" href="/public/css/main.css">';

    if ($_SESSION["mail"] === 1) {
        echo "<div class='modal'>
          <div class='content_modal'>
            <div class='text textCenter'>
            <p>The message has been sent successfully. We will contact you shortly. Thank you.</p>
            </div>
          </div>
          </div>";
    } else {
        echo "<div class='modal'>
          <div class='content_modal'>
          <div class='text textCenter'>
            <p>The message has been sent successfully. We will contact you shortly. Thank you.</p>
          </div>
          </div>
        </div>";
    }
    echo '<script src="/public/js/modal.js"></script>';

    session_destroy();
}
