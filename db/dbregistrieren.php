<?php 
    session_start();
    require("dbaccess.php");
    
    if(isset($_POST["anrede"])){
      $sql = "INSERT INTO users (id, Username, Passwort, Anrede, Vorname, Nachname, Email, Newsletter, Rolle) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

      $stmt = $db_obj->prepare($sql);
      $stmt-> bind_param("issssssis", $id, $Username, $Passwort, $Anrede, $Vorname, $Nachname, $Email, $Newsletter, $Rolle);
    
      $id = "NULL";
      $Username = $_POST["username"];
      $Passwort = $_POST["passwort1"];
      $Anrede = $_POST["anrede"];
      $Vorname = $_POST["vorname"];
      $Nachname = $_POST["nachname"];
      $Email = $_POST["email"]; 
      if (!isset($_POST["newsletter"])){
        $Newsletter = 0;
      } else {
        $Newsletter = 1;
      }
      $Rolle = "user";

      $stmt->execute();
    }

    header('Location: /DOCUMENT_ROOT/index.php?site=homepage');
?>