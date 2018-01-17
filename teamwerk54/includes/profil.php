<div id="profil" class="navbar-fixed-bottom container-fluid">
  <div class="container-fluid">
    <div class="row fw-name-close LightblueColor">
      <div id="turndown">
        <span id="downico" class="glyphicon glyphicon-remove" aria-hidden="false"></span>
      </div>
      <div id="div_backico">
        <span id="backico" class="glyphicon glyphicon-arrow-left" aria-hidden="false"></span>
      </div>
    </div>
  </div>
  <?php //DEVELOPMENT ABFRAGE

    if(true){
      include 'register.php';
    }
    else {
      include 'loggedin.php';
    }

   ?>
</div>
