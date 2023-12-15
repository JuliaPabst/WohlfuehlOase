<?php 
    session_start();
    require("dbaccess.php");

    $sql = "SELECT Username, Passwort, Vorname, Nachname, Anrede, Rolle, Email, Newsletter FROM users";
    $result = $db_obj->query($sql);



    while ($row = $result->fetch_array()) { 
        if($_POST["usernameLoggedIn"] == $row['Username'] && $_POST["passwortLoggedIn"] == $row['Passwort']){
            if($_POST["usernameLoggedIn"] == "hoteladmin" && $_POST["passwortLoggedIn"] == 1234){
                $_SESSION["anmeldeStatus"] = 1;
                $_SESSION["Rolle"] = $row['Rolle'];
                $_SESSION["Vorname"] = $row['Vorname'];
                $_SESSION["Nachname"] = $row['Nachname'];
                $_SESSION["Rolle"] = $row['Rolle'];
                $_SESSION["Anrede"] = $row['Anrede'];
                $_SESSION["Email"] = $row['Email'];
                $_SESSION["newsletter"] = $row['Newsletter'];
            } else {
                $_SESSION["anmeldeStatus"] = 2;
                $_SESSION["usernameLoggedIn"] = $_POST["usernameLoggedIn"];
                $_SESSION["passwortLoggedIn"] = $_POST["passwortLoggedIn"];
                $_SESSION["Vorname"] = $row['Vorname'];
                $_SESSION["Nachname"] = $row['Nachname'];
                $_SESSION["Rolle"] = $row['Rolle'];
                $_SESSION["Anrede"] = $row['Anrede'];
                $_SESSION["Email"] = $row['Email'];
                $_SESSION["newsletter"] = $row['Newsletter'];
            }
           
            header('Location: /DOCUMENT_ROOT/index.php?site=homepage');
            exit;  
            
        } 
    }

    $_SESSION["anmeldeStatus"] = 0;
    header('Location: /DOCUMENT_ROOT/index.php?site=anmelden');
    
    exit; 
    

   
?>