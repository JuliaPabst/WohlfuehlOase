<h2> Alle Buchungen</h2>
<?php 
  $counter = 0;
  require("dbaccess.php");

  $stmt = $db_obj->prepare("SELECT Vorname, Nachname, Anreise, Abreise, Frühstück, Haustier, Haustierinfo, Buchungsstatus, Parkplatz, Datum, Preis FROM buchungen");
  $stmt->execute();
  $result = $stmt->get_result();

  while ($row = $result->fetch_assoc()) {
    if(($row["Vorname"] == $_SESSION["Vorname"] && $row["Nachname"] == $_SESSION["Nachname"])|| ($_SESSION["usernameLoggedIn"] == "hoteladmin")){
      $counter = $counter + 1;  
      echo '<h3>Buchung '.$counter.'</h3>';
      echo '<p>'.$row["Datum"].'</p>';
      echo '<div class="container-fluid">';
      if($_SESSION["Vorname"] == "Hotel" && $_SESSION["Nachname"] == "Admin"){
        echo '<div class="row first-row">
        <div class="col-sm-6 px-0"><p>Vorname:</p></div>
        <div class="col-sm-6 px-0"><p>'.$row["Vorname"].'</p></div>
        </div>';
        echo '<div class="row first-row">
        <div class="col-sm-6 px-0"><p>Nachname:</p></div>
        <div class="col-sm-6 px-0"><p>'.$row["Nachname"].'</p></div>
        </div>';
      }
      echo '<div class="row first-row">
      <div class="col-6 px-0 "><p>Anreise:</p></div>
      <div class="col-6 px-0 "><p>'.$row["Anreise"].'</p></div>
      </div>';
      echo '<div class="row first-row">
      <div class="col-6 px-0"><p>Abreise:</p></div>
      <div class="col-6 px-0"><p>'.$row["Abreise"].'</p></div>
        </div>';
      if($row["Frühstück"] == 1){
        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Mit Frühstück:</p></div>
        <div class="col-6 px-0"><p>ja</p></div>
        </div>';
      } else {
        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Mit Frühstück:</p></div>
        <div class="col-6 px-0"><p>nein</p></div>
        </div>';
      }
      if($row["Parkplatz"] == 1){
        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Mit Parkplatz:</p></div>
        <div class="col-6 px-0"><p>ja</p></div>
        </div>';
      } else {
        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Mit Parkplatz:</p></div>
        <div class="col-6 px-0"><p>nein</p></div>
        </div>';
      }
      if($row["Haustier"] == 1){
        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Mit Haustier:</p></div>
        <div class="col-6 px-0"><p>ja</p></div>
        </div>';
      } else {
        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Mit Haustier:</p></div>
        <div class="col-6 px-0"><p>nein</p></div>
        </div>';
      }
        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Buchungsstatus:</p></div>
        <div class="col-6 px-0"><p>'.$row["Buchungsstatus"].'</p></div>
        </div>';    
        echo '</div>'; 

        echo '<div class="row first-row">
        <div class="col-6 px-0"><p>Buchungsstatus:</p></div>
        <div class="col-6 px-0"><p>'.$row["Preis"].'€</p></div>
        </div>';    
        echo '</div>'; 
        
    }    
  } 

  $stmt->close();
?>



