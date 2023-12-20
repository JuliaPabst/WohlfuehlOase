<h2> Alle Buchungen</h2>




<?php 
  require("dbaccess.php");

  $sql = "SELECT Vorname, Nachname, Anreise, Abreise, Frühstück, Haustier, Haustierinfo, Buchungsstatus, Parkplatz FROM buchungen";
  $result = $db_obj->query($sql);
  $counter = 0;

  
  while ($row = $result->fetch_array()) {
    if(($row["Vorname"] == $_SESSION["Vorname"] && $row["Nachname"] == $_SESSION["Nachname"])|| ($_SESSION["Vorname"] == "Hotel" && $_SESSION["Nachname"] == "Admin")){
      $counter = $counter + 1;  
      echo '<h3>Buchung '.$counter.'</h3>';
      echo '<div class="container-fluid">';
      if($_SESSION["Vorname"] == "Hotel" && $_SESSION["Nachname"] == "Admin"){
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Vorname:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>'.$row["Vorname"].'</p></div>
        </div>';
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Nachname:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>'.$row["Nachname"].'</p></div>
        </div>';
      }
      echo '<div class="row first-row">
      <div class="col-lg-6 px-0 column-bigscreen"><p>Anreise:</p></div>
      <div class="col-lg-6 px-0 column-bigscreen"><p>'.$row["Anreise"].'</p></div>
        </div>';
      echo '<div class="row first-row">
      <div class="col-lg-6 px-0 column-bigscreen"><p>Abreise:</p></div>
      <div class="col-lg-6 px-0 column-bigscreen"><p>'.$row["Abreise"].'</p></div>
        </div>';
      if($row["Frühstück"] == 1){
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Mit Frühstück:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>ja</p></div>
        </div>';
      } else {
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Mit Frühstück:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>nein</p></div>
        </div>';
      }
      if($row["Parkplatz"] == 1){
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Mit Parkplatz:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>ja</p></div>
        </div>';
      } else {
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Mit Parkplatz:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>nein</p></div>
        </div>';
      }
      if($row["Haustier"] == 1){
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Mit Haustier:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>ja</p></div>
        </div>';
      } else {
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Mit Haustier:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen"><p>nein</p></div>
        </div>';
      }
        echo '<div class="row first-row">
        <div class="col-lg-6 px-0 column-bigscreen"><p>Buchungsstatus:</p></div>
        <div class="col-lg-6 px-0 column-bigscreen">
          <form action="http://localhost/DOCUMENT_ROOT/index.php?site=gebucht"<p>'.$row["Buchungsstatus"].'</p></div>
        </div>';    
        echo '</div>'; 
    }    
  } 
?>


