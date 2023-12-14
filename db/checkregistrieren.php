<?php
  session_start();

  $redirectToRegister = 0; 


  require("dbaccess.php");

    $sql = "SELECT Username, Passwort, Vorname, Nachname FROM users";
    $result = $db_obj->query($sql);

    $SESSION["bereitsAccount"] = 0;
    while ($row = $result->fetch_array()) { 
        if($_POST["username"] == $row['Username']){
            $_SESSION["bereitsAccount"] = 1; 
            $redirectToRegister = 1;
        } 
    }

  if(!isset($_POST["anrede"]) || !($_POST["anrede"] == "Frau" || $_POST["anrede"] == "Herr" || $_POST["anrede"] == "Keine Anrede")) {
    $_SESSION["anredeVergleich"] = 0;
    $redirectToRegister = 1;
  } else {
    $_SESSION["anredeVergleich"] = 1;
  }

  if(!isset($_POST["vorname"]) || trim($_POST["vorname"]) == "" || !preg_match("/^[a-zA-ZäöüÄÖÜß']*$/", $_POST["vorname"])) {
    $_SESSION["vornameVergleich"] = 0;
    $redirectToRegister = 1;
  } else {
    $_SESSION["vornameVergleich"] = 1;
  }

  if(!isset($_POST["nachname"]) || trim($_POST["nachname"]) == "" || !preg_match("/^[a-zA-ZäöüÄÖÜß']*$/", $_POST["nachname"])) {
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

  if (!isset($_Post["newsletter"])){
    $_SESSION["Newsletter"] = 0;
  } else {
    $_SESSION["Newsletter"] = 1;
  }

    
  $_SESSION["Username"] = $_POST["username"];
  $_SESSION["Passwort"] = $_POST["passwort1"];
  $_SESSION["Anrede"] = $_POST["anrede"];
  $_SESSION["Vorname"] = $_POST["vorname"];
  $_SESSION["Nachname"] = $_POST["nachname"];
  $_SESSION["Email"] = $_POST["email"]; 

  
  if($redirectToRegister == 1){
    header('Location: /DOCUMENT_ROOT/index.php?site=registrieren');
    exit;
  } else {
    header('Location: /DOCUMENT_ROOT/db/dbregistrieren.php');
    exit;
  } 
  
?>