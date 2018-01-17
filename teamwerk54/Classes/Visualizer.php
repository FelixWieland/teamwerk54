<?php
/**
 *
 */
class Visualizer
{
  public $unfetchedData = 'nul';
  function __construct($wich, $unfetchedData="noDataNeeded") {

    $this->unfetchedData = $unfetchedData;
    switch ($wich) {
      case 'LIKE-SYMBOL':
        $this->likeSymbol();
        break;
      case 'ZUFI-BEREICH':
        $this->zufiBereich();
        break;
      case 'PLACEHOLDER':
        $this->placeholder();
        break;
      case 'AUSBILDUNG':
        $this->ausbildung();
        break;
      default:
        echo "<!--ERROR IN VISUALIZER AT CONSTRUCT IN PARAMETER '\$wich'-->";
        break;
    }
  }

  function likeSymbol() {
    //Bindet LikeSymbol ein
    echo '<div id="fw-tw54like"></div>';
  }

  function zufiBereich() {
    while($row = $this->unfetchedData->fetch_assoc()) {
          echo '
          <div class="fw-responsive-img fw-extender" name="fw-ausbildungen_und_studium" data-azubikey="Bereich" data-azubivalue="'. $row['bereich'] .'">
            <div class="fw-img-main" style="background-image: url(\'Images/Bereiche/'. $row['bereich'] .'.png");"></div>
            <span class="fw-img-text">'.$row['bereich'].'</span>
          </div>
          ';
    }
  }

  function placeholder() {
    $times = $this->unfetchedData;
    for ($i=0; $i < $times; $i++) {
      echo '
      <div class="fw-responsive-img fw-extender" name="fw-ausbildungen_und_studium" data-azubikey="demo" data-azubivalue="demo">
        <div class="fw-img-main" style="background-image: url(\'http://via.placeholder.com/350x150\');"></div>
        <span class="fw-img-text">Demobild</span>
      </div>
      ';
      //echo '<img class="fw-responsive-img fw-extender" src="http://via.placeholder.com/350x150" alt="Fachinformatiker" name="fw-ausbildungen_und_studium"/>';
    }
  }

  function ausbildung() {
    echo '

    ';
  }
}

 ?>
