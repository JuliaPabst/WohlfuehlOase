<?php
    session_start();
    require("dbaccess.php");
        
    $sql = "INSERT INTO newsbeiträge (id, Titel, Lead, Textfeld) VALUES (?, ?, ?, ?)";

    $stmt = $db_obj->prepare($sql);
    $id = "NULL";
    
    $stmt-> bind_param("isss", $id, $Titel, $Lead, $Textfeld);

    $id = NULL;
    $Titel = $_SESSION["Titel"];
    $Lead = $_SESSION["Lead"];
    $Textfeld = $_SESSION["Textfeld"];

    $stmt->execute();

    header('Location: /DOCUMENT_ROOT/index.php?site=news');
    exit;
?>