<?php
/**
 * ZUFI
 *
 * AUFGABE: nach erfolgreichem aufrufen des Konstruktors richtige Daten in $queriedData übergeben
 *          auserdem falls Fehler in den Daten oder in der Abfrage auftreten sollten, einen Wert zurückgeben der die standard Abfrage
 *          ausführt.
**/
class Zufi
{
  public $queriedData = null;
  public $o_db;
  function __construct($ajax_zufi, $o_db_p)
  {
    $this->o_db = $o_db_p;
    $x = 1;
    if(empty($ajax_zufi)){
      $this->withoutData();
    }
    //Query aufgrund von ajaxZufi
  }

  function withoutData()
  {
    //Query Bereiche
    $this->queriedData = $this->o_db->query("SELECT * FROM `bereiche`");
  }



}

 ?>
