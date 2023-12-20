<?php
    session_start();
    require("dbaccess.php");
        
    $sql = "INSERT INTO news (id, Titel, Lead, Textfeld, Bild) VALUES (?, ?, ?, ?, ?)";

    $stmt = $db_obj->prepare($sql);
    $id = "NULL";
    
    $stmt-> bind_param("issss", $id, $Titel, $Lead, $Textfeld, $Bild);

    $id = NULL;
    $Titel = $_SESSION["Titel"];
    $Lead = $_SESSION["Lead"];
    $Textfeld = $_SESSION["Textfeld"];
    $Bild = $_SESSION["Bild"];

    $stmt->execute();

    header('Location: /DOCUMENT_ROOT/index.php?site=news');
    exit;
?>