<?php
  session_start();

  $redirectToProfilBearbeiten = 0; 
  $_SESSION["profilBearbeitenEnable"] = 1;
  $_SESSION["bereitsAccount"] = 1; 


  require("dbaccess.php");

    $sql = "SELECT Username, Passwort, Vorname, Nachname FROM users";
    $result = $db_obj->query($sql);

    if(isset($_POST["changeType"]) && $_POST["changeType"]="user"){
      while ($row = $result->fetch_array()) { 
        if($_POST["username"] == $row['Username'] && $row['Username'] != $_SESSION['usernameLoggedIn']){
            $_SESSION["bereitsAccount"] = 0; 
            $redirectToProfilBearbeiten = 1;
            break;
        } else {
            $_SESSION["Username"] = $_POST["username"];
        }
      }
    } else {
      while ($row = $result->fetch_array()) { 
        if($_POST["username"] == $row['Username'] && $row['Username'] != $_SESSION["usernameLoggedIn"] ){
            $_SESSION["bereitsAccount"] = 0; 
            $redirectToProfilBearbeiten = 1;
            break;
        } else {
            $_SESSION["Username"] = $_POST["username"];
        }
      }
    }
    

  if(!isset($_POST["anrede"]) || !($_POST["anrede"] == "Frau" || $_POST["anrede"] == "Herr" || $_POST["anrede"] == "Keine Anrede")) {
    $_SESSION["anredeVergleich"] = 0;
    $redirectToProfilBearbeiten = 1;
    echo "Anrede";
  } else {
    $_SESSION["anredeVergleich"] = 1;
    $_SESSION["Anrede"] = $_POST["anrede"];
  }

  if(!isset($_POST["vorname"]) || trim($_POST["vorname"]) == "" || !preg_match("/^[a-zA-ZäöüÄÖÜß']*$/", $_POST["vorname"])) {
    $_SESSION["vornameVergleich"] = 0;
    $redirectToProfilBearbeiten = 1;
  } else {
    $_SESSION["vornameVergleich"] = 1;
    $_SESSION["alterVorname"] = $_SESSION["Vorname"];
    $_SESSION["Vorname"] = $_POST["vorname"];
  }

  if(!isset($_POST["nachname"]) || trim($_POST["nachname"]) == "" || !preg_match("/^[a-zA-ZäöüÄÖÜß']*$/", $_POST["nachname"])) {
    $_SESSION["nachnameVergleich"] = 0;
    $redirectToProfilBearbeiten = 1;
  } else {
    $_SESSION["nachnameVergleich"] = 1;
    $_SESSION["alterNachname"] = $_SESSION["Nachname"];
    $_SESSION["Nachname"] = $_POST["nachname"];
  }

  $email = $_POST["email"];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    $_SESSION["emailVergleich"] = 0;
    $redirectToProfilBearbeiten = 1;
  } else {
    $_SESSION["emailVergleich"] = 1;
    $_SESSION["Email"] = $_POST["email"]; 
  }
  
  if(isset($_POST["passwort1"]) && isset($_POST["passwort2"]) && $_POST["passwort1"] != $_POST["passwort2"]) {
    $_SESSION["passwortVergleich"] = 0;
    $redirectToProfilBearbeiten = 1;
  } else {
    $_SESSION["passwortVergleich"] = 1;
    $_SESSION["Passwort"] = password_hash($_POST["passwort1"], PASSWORD_DEFAULT);
  }

  if (!isset($_POST["newsletter"])){
    $_SESSION["Newsletter"] = 0;
  } else {
    $_SESSION["Newsletter"] = 1;
  }


  if (!isset($_POST["aktiv"])){
    $_SESSION["aktiv"] = "inaktiv";
  } else {
    $_SESSION["aktiv"] = "aktiv";
  }
  
  if($redirectToProfilBearbeiten == 0){
    if(isset($_SESSION["changeType"]) && $_SESSION["changeType"] == "user"){
      $sql = "UPDATE users SET Username = ?, Passwort = ?, Vorname = ?, Nachname = ?, Anrede = ?, Email = ?, Newsletter = ? WHERE Username = ?";
      $stmt = $db_obj->prepare($sql);
      $stmt->bind_param("ssssssis", $_SESSION["Username"], $_SESSION["Passwort"], $_SESSION["Vorname"], $_SESSION["Nachname"], $_SESSION["Anrede"], $_SESSION["Email"], $_SESSION["Newsletter"], $_SESSION["usernameLoggedIn"]);
      $stmt->execute();
      $_SESSION['usernameLoggedIn'] = $_POST["username"];
      $_SESSION["passwortLoggedIn"] = $_POST["passwort1"];

      $sql2 = "UPDATE buchungen SET Vorname = ?, Nachname = ? WHERE Vorname = ? AND Nachname = ?";
      $stmt = $db_obj->prepare($sql2);
      $stmt->bind_param("ssss", $_SESSION["Vorname"], $_SESSION["Nachname"], $_SESSION["alterVorname"], $_SESSION["alterNachname"]);
      $stmt->execute();
      $_SESSION['alterVorname'] = $_SESSION["Vorname"];
      $_SESSION["alterNachname"] = $_SESSION["Nachname"];
      $_SESSION["Username"];
      header('Location: /DOCUMENT_ROOT/index.php?site=profil');
      exit; 
    } else if (isset($_SESSION["changeType"]) && $_SESSION["changeType"] == "admin"){
      $sql = "UPDATE users SET Username = ?, Passwort = ?, Vorname = ?, Nachname = ?, Anrede = ?, Email = ?, Newsletter = ?, aktiv = ? WHERE Username = ?";
      $stmt = $db_obj->prepare($sql);
      $stmt->bind_param("ssssssiss", $_SESSION["Username"], $_SESSION["Passwort"], $_SESSION["Vorname"], $_SESSION["Nachname"], $_SESSION["Anrede"], $_SESSION["Email"], $_SESSION["Newsletter"], $_SESSION["aktiv"], $_SESSION["usernameLoggedIn"]);
      $stmt->execute();
      $_SESSION['usernameLoggedIn'] = $_POST["username"];
      $_SESSION["passwortLoggedIn"] = $_POST["passwort1"];

      $sql2 = "UPDATE buchungen SET Vorname = ?, Nachname = ? WHERE Vorname = ? AND Nachname = ?";
      $stmt = $db_obj->prepare($sql2);
      $stmt->bind_param("ssss", $_SESSION["Vorname"], $_SESSION["Nachname"], $_SESSION["alterVorname"], $_SESSION["alterNachname"]);
      $stmt->execute();
      $_SESSION['alterVorname'] = $_SESSION["Vorname"];
      $_SESSION["alterNachname"] = $_SESSION["Nachname"];
      $_SESSION["Username"];
      
      $_SESSION["Nachname"] = "Hotel";
      $_SESSION["Vorname"] = "Admin";
      $_SESSION["userBearbeiten"] = 0;
      header('Location: /DOCUMENT_ROOT/index.php?site=users');
      exit; 
    }
  } else {
    if(isset($_SESSION["changeType"]) && $_SESSION["changeType"] == "user"){
      header('Location: /DOCUMENT_ROOT/index.php?site=profil');
      exit;
    } else {
      $_SESSION["userBearbeiten"] = 1;
      header('Location: /DOCUMENT_ROOT/index.php?site=users');
      exit; 
    }
  } 
  
?>