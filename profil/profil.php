<?php
  if(isset($_POST["passwortLoggedIn"]) && $_POST["passwortLoggedIn"] == $_SESSION["passwortLoggedIn"] && !isset($_POST["anrede"])) {
    $_SESSION["passwortCheckProfil"] = 1;
    include 'profil/profilBearbeiten.php';
  } else {
    if(isset($_POST["passwortLoggedIn"])){
        $_SESSION["passwortCheckProfil"] = 0;
    }
    include 'profil/profilAnzeigen.php';
  }
?>