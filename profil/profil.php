<?php
if((isset($_POST["passwortLoggedIn"])) && $_POST["passwortLoggedIn"] == $_SESSION["passwortLoggedIn"] ){
    include 'profilBearbeiten.php';
} else {
    include 'profilAnzeigen.php';
}
?>