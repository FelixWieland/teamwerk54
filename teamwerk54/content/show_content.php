<?php
session_start();

require '../Classes/Security.php';
require '../Classes/User.php';
require '../Classes/Visualizer.php';

$visualized = new Visualizer("AUSBILDUNG", "test");
 ?>
 <div id="fw-ausbildung-like" class="fw-ausbildung-like LightblueColor" data-azubivalue="demo"></div>
 <div class="container-fluid" style="padding: 15px; height: 75%; position: relative;" id="fw-comp-area">
 <span id="fw-extended-closer" onclick="return close_extender();" class="glyphicon glyphicon glyphicon-remove" aria-hidden="false"></span>
 <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: white; height: 100%;">
   <p class="fw-ausbildung-name">Data</p>

  </div>
<!--  <div class="col-sm-5 col-md-5 col-lg-5" style="padding-left: 0px;">

    <div class="col-sm-12 col-md-12 col-lg-12 fw-box">
      <p class="fw-ausbildung-name">Data</p>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 fw-box-2 fw-ausbildung-info-parent">
      <p class="fw-ausbildung-info">
        test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>
          test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>  test</br>
      </p>
    </div>

  </div>
  <div class="col-sm-1 col-md-1 col-lg-1 fw-box" style="height: 100%">

  </div>
  <div class="col-sm-6 col-md-6 col-lg-6" id="fw-left-area">
    <div class="col-sm-12 col-md-12 col-lg-12 fw-box">
      <iframe id="fw-md-video" src="https://www.youtube.com/embed/hZAt2dwqdqd9lHMeo?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>-->

 </div>
 <div class="container-fluid" style="height: 25%; padding-bottom: 15px;">
   <div class="col-sm-12 col-md-12 col-lg-12 fw-vorschlag-box">

   </div>
 </div>
