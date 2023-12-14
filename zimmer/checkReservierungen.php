<?php
    session_start();
    $redirectToBooking = 0; 

    
    if(isset($_POST["anreise"]) && isset($_POST["abreise"])){
        if($_POST["anreise"] < date("Y-m-d")){
            $_SESSION["anreiseVorHeute"] = 1;
            $redirectToBooking = 1; 
        } else {
            $_SESSION["anreiseVorHeute"] = 0;
        }
        if($_POST["abreise"] < date("Y-m-d")){
            $_SESSION["abreiseVorHeute"] = 1;
            $redirectToBooking = 1; 
        } else {
            $_SESSION["abreiseVorHeute"] = 0;
        }
        if($_POST["anreise"] > $_POST["abreise"]){
            $_SESSION["anreiseNachAbreise"] = 1;
            $redirectToBooking = 1; 
        } else {
            $_SESSION["anreiseNachAbreise"]  = 0;
        }
    }

    if (!isset($_POST["fruehstueck"])){
        $_SESSION["Fruehstueck"] = 0;
      } else {
        $_SESSION["Fruehstueck"] = 1;
    }

    if (!isset($_POST["parkplatz"])){
        $_SESSION["Parkplatz"] = 0;
      } else {
        $_SESSION["Parkplatz"] = 1;
    }

    if (!isset($_POST["haustier"])){
        $_SESSION["Haustier"] = 0;
      } else {
        $_SESSION["Haustier"] = 1;
    }

    if(!isset($_POST["infosHaustier"])){
        $_SESSION["InfosHaustier"] = "";
    } else {
        $_SESSION["InfosHaustier"] = $_POST["infosHaustier"];
    }
 
    $_SESSION["Anreise"] = $_POST["anreise"];
    $_SESSION["Abreise"] = $_POST["abreise"];


    if($redirectToBooking == 1){
        header('Location: /DOCUMENT_ROOT/index.php?site=neueReservierung');
        exit;
      } else {
        header('Location: /DOCUMENT_ROOT/db/dbreservieren.php');
        exit;
      } 

?>