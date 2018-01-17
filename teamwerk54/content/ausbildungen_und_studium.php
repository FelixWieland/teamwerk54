<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Deklaration of Variables
$gb_infinityScroll = false;
$demoquery = false;

//Detect if call from infinityScroll
if(isset($_POST['infinityScroll'])){
  if($_POST['infinityScroll'] == 'true'){
    $gb_infinityScroll = true;

    require '../Classes/Security.php';
    require '../Classes/User.php';
    require '../Classes/Zufi.php';
    require '../Classes/Visualizer.php';
  }
}
else {
  //Bindet Like Symbol ein
  $visualized = new Visualizer("LIKE-SYMBOL");
}


$sec = new Security('new');
$querytype = 'none';

//Variablen von ajax:
//{'infinityScroll': 'true', 'times': load_times, 'zufiData': zufiLikes}
if ($gb_infinityScroll) {

  //FUNKTIONIERT !!!!
  $zufiData = json_decode($_POST['zufiData']);

  //FUNKTIONIERT !!!!
  foreach ($zufiData as $key => $dem) {
    echo $dem;
  }

  //$o_db = datenbank Object von Security
  $zufi = new Zufi($zufiData, $sec->o_db);
  $zufiQueryReturn = $zufi->queriedData;

}
else {
  // Demoquery von ausbildungen mit derzeitigen werten
  $zufi = new Zufi([], $sec->o_db);
  $querytype = "ZUFI-BEREICH";
}



if($querytype == "ZUFI-BEREICH"){
  $visualized = new Visualizer("ZUFI-BEREICH", $zufi->queriedData);
}
elseif ($querytype == "ZUFI-AZUBI") {
  # code...
}
else {
  $visualized = new Visualizer("PLACEHOLDER", 20);
}
