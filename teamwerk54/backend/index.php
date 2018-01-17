<?php
session_start();
 ?>
  <!DOCTYPE html>
  <html lang="de">

  <?php
    require '../includes/head_backend.php';
   ?>

  <body>

    <?php
      require '../includes/navbar_backend.php';
     ?>

    <div id="fw-mainpage">
      <?php
        include 'content/dashboard.php';
       ?>
    </div>

    <?php
      require '../includes/scripts_backend.php';
     ?>
  </body>

</html>
