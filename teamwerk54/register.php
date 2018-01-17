<?php
//* Wichtige Infos
//* Registrations IDs sind: Email: input_reg_email
//*                         Vorname: input_reg_vorname
//*                         Nachname: input_reg_nachname
//*                         Passwort: input_reg_passwort
//*
//* Login IDs sind: Email: input_log_email
//*                 Passwort: input_log_passwort
 ?>
<div class="background-surfer">
<div id="login_register_chooseing_and_doing">
  <div id="reg_or_log_form" class="container-fluid" style="margin-top: 1%; margin-bottom: 1%;">
    <div class="row div_choose_reglog">
      <div class="col-xs-12 col-sm-12 col-md-2"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 card-4">
        <center>
          <h1>willkommen bei teamwerk54!</h1>
          <p>das erste mal hier?</p>
          <p><a id="register_btn" class="btn btn-primary btn-lg" role="button">hier klicken zum registrieren</a></p>
        </center>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3"></div>
    </div>
    <div class="row div_choose_reglog">
      <div class="col-xs-12 col-sm-12 col-md-4"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 card-4">
        <center>
          <h1>moment... <br> wir kennen uns doch!</h1>
          <p>na dann hier entlang!</p>
          <p><a id="login_btn" class="btn btn-primary btn-lg" role="button">login</a></p>
        </center>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2"></div>
    </div>
  </div>
  <div id="login_form" class="container-fluid">
    <div class="container card-4" style="padding: 15px;">
      <form class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="input_log_email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="input_log_passwort" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button id="validate_btn_login" class="btn btn-primary btn-lg btn-block">einloggen!</button>
        </div>
      </div>
    </form>
    </div>
  </div>

  <div id="register_form" class="container-fluid" style="margin-top: 3%; display: none;">
    <div class="container card-4" style="padding: 15px;">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="Vorname" class="form-control" id="input_reg_vorname" placeholder="Vorname">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nachname</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="input_reg_nachname" placeholder="Nachname">
          </div>
        </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="input_reg_email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Passwort</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="input_reg_passwort" placeholder="Passwort">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button id="validate_btn_register" class="btn btn-primary btn-lg btn-block">registrieren!</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
