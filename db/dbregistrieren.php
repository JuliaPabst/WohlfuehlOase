<?php 
    session_start();

    require("dbaccess.php");
    
    $sql = "INSERT INTO users (id, Username, Passwort, Anrede, Vorname, Nachname, Email, Newsletter, Rolle) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $db_obj->prepare($sql);
    $id = "NULL";
    
    $stmt-> bind_param("issssssis", $id, $Username, $Passwort, $Anrede, $Vorname, $Nachname, $Email, $Newsletter, $Rolle);
  
    $Username = $_SESSION["Username"];
    $Passwort = $_SESSION["Passwort"];
    $Anrede = $_SESSION["Anrede"];
    $Vorname = $_SESSION["Vorname"];
    $Nachname = $_SESSION["Nachname"];
    $Email = $_SESSION["Email"]; 
    $Newsletter = $_SESSION["Newsletter"];
    $Rolle = "user";

    $_SESSION["anmeldeStatus"] = 2;
    $_SESSION["usernameLoggedIn"] = $_SESSION["Username"];
    $_SESSION["passwortLoggedIn"] = $_SESSION["Passwort"];

    $stmt->execute();
    

    header('Location: /DOCUMENT_ROOT/index.php?site=homepage');
    exit; 
    
    
?>