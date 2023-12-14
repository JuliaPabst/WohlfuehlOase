<?php 
    session_start();

    require("dbaccess.php");

   
    
    $sql = "INSERT INTO buchungen (id, Vorname, Nachname, Anreise, Abreise, Frühstück, Haustier, Haustierinfo, Buchungsstatus, Parkplatz) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $db_obj->prepare($sql);
    $id = "NULL";
    
    $stmt-> bind_param("issssddssd", $id, $Vorname, $Nachname, $Anreise, $Abreise, $Fruehstueck, $Haustier, $HaustierInfo, $Buchungsstatus, $Parkplatz);

    $id = NULL; 
    $Vorname = $_SESSION["Vorname"];
    $Nachname = $_SESSION["Nachname"];
    $Anreise = $_SESSION["Anreise"];
    $Abreise = $_SESSION["Abreise"];
    $Fruehstueck = $_SESSION["Fruehstueck"];
    $Parkplatz = $_SESSION["Parkplatz"];
    $Haustier = $_SESSION["Haustier"];
    $HaustierInfo = $_SESSION["InfosHaustier"];
    $Buchungsstatus = "In Bearbeitung";
 

    $stmt->execute();
    
    header('Location: /DOCUMENT_ROOT/index.php?site=homepage');
    exit; 
?>