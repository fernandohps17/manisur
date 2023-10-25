<?php
  if(isset($_SESSION['error'])){
    if($_SESSION !== ""){
      echo "<div class='text error-post'>
              <p>".$_SESSION['error']."</p>
            </div>";

      $_SESSION['error'] = "";
    }
  }
?>