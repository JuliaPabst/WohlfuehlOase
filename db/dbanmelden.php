<?php 
    session_start();
    require("dbaccess.php");

    $sql = "SELECT Username, Passwort FROM users";
    $result = $db_obj->query($sql);



    while ($row = $result->fetch_array()) { 
        if($_POST["usernameLoggedIn"] == $row['Username'] && $_POST["passwortLoggedIn"] == $row['Passwort']){
            $_SESSION["anmeldeStatus"] = 1;
            $_SESSION["usernameLoggedIn"] = $_POST["usernameLoggedIn"];
            $_SESSION["passwortLoggedIn"] = $_POST["passwortLoggedIn"];
            header('Location: /DOCUMENT_ROOT/index.php?site=homepage');
            exit; 
        } 
    }
    $_SESSION["anmeldeStatus"] = 0;
    header('Location: /DOCUMENT_ROOT/index.php?site=anmelden');
    exit; 

   
?>