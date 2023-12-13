<?php
  session_start();

  $redirectToRegister = 0; 

  if(!isset($_POST["anrede"]) || !($_POST["anrede"] == "Frau" || $_POST["anrede"] == "Mann" || $_POST["anrede"] == "Keine Anrede")) {
    $_SESSION["anredeVergleich"] = 0;
    $redirectToRegister = 1;
  } else {
    $_SESSION["anredeVergleich"] = 1;
  }

  if(!isset($_POST["vorname"]) || $_POST["vorname"] == " " || !preg_match("/^[a-zA-Z-' ]*$/", $_POST["vorname"])) {
    $_SESSION["vornameVergleich"] = 0;
    $redirectToRegister = 1;
  } else {
    $_SESSION["vornameVergleich"] = 1;
  }

  if(!isset($_POST["nachname"]) || $_POST["nachname"] == " " || !preg_match("/^[a-zA-Z-' ]*$/", $_POST["nachname"])) {
    $_SESSION["nachnameVergleich"] = 0;
    $redirectToRegister = 1;
  } else {
    $_SESSION["nachnameVergleich"] = 1;
  }


  $email = $_POST["email"];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    $_SESSION["emailVergleich"] = 0;
    $redirectToRegister = 1;
  } else {
    $_SESSION["emailVergleich"] = 1;
  }
  
  if(isset($_POST["passwort1"]) && isset($_POST["passwort2"]) && $_POST["passwort1"] != $_POST["passwort2"]) {
    $_SESSION["passwortVergleich"] = 0;
    $redirectToRegister = 1;
  } else {
    $_SESSION["passwortVergleich"] = 1;
  }

  if($redirectToRegister == 1){
    header('Location: /DOCUMENT_ROOT/index.php?site=registrieren');
    exit;
  } else {
    header('Location: /DOCUMENT_ROOT/db/dbregistrieren.php');
    exit;
  }
  
  

?>