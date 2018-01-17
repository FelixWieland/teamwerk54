<?php
session_start();
//Einbinden der SQL Verbindung und übergeben des Objekts in die Session
//Einbinden der Klassen
require 'Classes/Security.php';
require 'Classes/User.php';
require 'Classes/Zufi.php';
require 'Classes/Visualizer.php';

 ?>

  <!DOCTYPE html>
  <html lang="de">

  <?php
    //Einbinden des HTML heads
    require 'includes/head.php';
   ?>

  <body>
    <?php
      //Einbinden der Navigationsbar
      require 'includes/navbar.php';
     ?>

    <!-- Page Content -->
    <div id="fw-logo-container" class="container marginToTop">
      <img class="logo" src="Images/logo.png" alt="teamwerk54">
    </div>

    <div id="fw-mainpage">
      <!-- Seiteninhalt -->
      <!-- Ausbildungen reinladen -->
      <div id="fw-fade-in-id">
        <?php
          //Einbinden der Ausbildungen und Studiengänge
          require 'content/ausbildungen_und_studium.php';
         ?>
      </div>
    </div>

    <?php
      //Einbinden des Profils und der Chatfunktion
      require 'includes/profil.php';
      require 'includes/chat.php';

      //Einbinden des Footers
      require 'includes/footer.php';

      //Einbinden der Javascripte
      require 'includes/scripts.php';
    ?>
  </body>

</html>
