<?php 
if(isset($_POST["usernameLoggedIn"]) && isset($_POST["anrede"])){
    $_SESSION["anrede"] = $_POST["anrede"];
    $_SESSION["vorname"] = $_POST["vorname"];
    $_SESSION["nachname"] = $_POST["nachname"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["newsletter"] = $_POST["newsletter"];
    $_SESSION["usernameLoggedIn"] = $_POST["usernameLoggedIn"];
    $_SESSION["passwortLoggedIn"] = $_POST["passwortLoggedIn"];
  }
?>



<?php

  if(isset($_POST["passwortLoggedIn"]) && $_POST["passwortLoggedIn"] == $_SESSION["passwortLoggedIn"] && !isset($_POST["anrede"])) {
    include 'profil/profilBearbeiten.php';
  } else {
    include 'profil/profilAnzeigen.php';
  }

  
    
   


?>

</form>
