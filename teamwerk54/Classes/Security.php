<?php

/**
 * Datenbankzugriffsklasse - Sicherheit vor SQL Injektions - Verwalten von salted-hashes - Anlegen neuer Profile
 * Zurücksetzen von Passwörten - Twincommunication
 */
class Security
{
  //Klassenvariablen
  public $o_db;

  function __construct($demo)
  {
    //Erzeugt Datenbankobjekt
    $ls_db_server = 'localhost';
    $ls_db_user = 'root';
    $ls_db_password = '';
    $ls_db_database = 'teamwerk54';

    $this->o_db = mysqli_connect($ls_db_server, $ls_db_user, $ls_db_password, $ls_db_database);
    if(!$this->o_db)
    {
      exit("Verbindungsfehler: ".mysqli_connect_error());
    }
  }

  function saltPassword($password, $salt)
  {
    return hash('sha256', $password . $salt);
  }

  function unused($value='')
  {
    if (trim($vorname) == '' || trim($nachname) == '' || trim($email) == '' || trim($passwort)){
      //gibt einen error zurück
      echo "ERROR";
    }
    else {
      if($vorname == 'twDEFAULTNAME54_56gH*%/Y' && $nachname == 'twDEFAULTNAME54_56gH*%/Y'){
        //Ruft Login Funktion auf
      }
      else {
        //Ruft Registrieren Funktion auf
      }
    }
  }

  function Login($value='')
  {
    // Erzeugung von Passwort-Hash mit Salt
    $password = "ganz_geheim";
    $userID   = 5121; // Die UserID dient hier als einfache Möglichkeit für den Salt (hier als Beispiel 5121)
    $salt = $userID;
    $saltedHash    = saltPassword($password, $salt);
    echo $password . ' : ' . $saltedHash . ' (Salt: ' . $salt . ')';

    // Prüfung (beispielhaft)
    $saltedHash = get_user_hash($_POST['username']); // Fiktive Funktion um salted Hash aus der Datenbank zu laden
    $salt = get_user_id($_POST['username']); // Fiktive Funktion um UserID abzurufen
    if ($saltedHash == saltPassword($_POST['password'], $salt)) // Prüfung mit Salt
    {
         echo "Passwort stimmt überein";
    }
  }
}




 ?>
