<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wohlfühloase</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/DOCUMENT_ROOT/stylesheet2.css" />
  </head>
  <body>
   

 <?php
  

  if(isset($_POST["logOut"])){
    unset($_SESSION["usernameLoggedIn"]);
  }

 
  if(isset($_SESSION["usernameLoggedIn"]) && $_SESSION["usernameLoggedIn"] != "admin"){
    include 'logging_status/navbar_loggedIn.php';
  } else if (!isset($_SESSION["usernameLoggedIn"]) || $_SESSION["usernameLoggedIn"] != $_SESSION["passwortLoggedIn"] && $_SESSION["usernameLoggedIn"] != "admin"){
    include 'logging_status/navbar_loggedOut.php';
  } else if(isset($_SESSION["usernameLoggedIn"]) && $_SESSION["usernameLoggedIn"] == "admin"){
    include 'logging_status/navbar_loggedIn_admin.php';
  } 


  if($_GET['site'] == "homepage"){
    include 'homepage.php';
   }
 
   if($_GET['site'] == "help"){
     include 'footer/help.php';
    }

    if($_GET['site'] == "impressum"){
      include 'footer/impressum.php';
     }
 
   if($_GET['site'] == "anmelden"){
     include 'anmelden_registrieren/anmelden.php';
   }
 
   if($_GET['site'] == "registrieren"){
     include 'anmelden_registrieren/registrieren.php';
   }

   if($_GET['site'] == "profil"){
    include 'profil/profil.php';
  }
 
   if($_GET['site'] == "neueReservierung"){
     include 'zimmer/neueBuchung.php';
   }

   if($_GET['site'] == "gebucht"){
    include 'zimmer/listeBuchungen.php';
  }

  if($_GET['site'] == "CMS"){
    include 'cms.php';
  }
 ?>

    <footer>
      <a href="/DOCUMENT_ROOT/index.php?site=impressum" class="footer-link">Impressum</a>
      <a href="/DOCUMENT_ROOT/index.php?site=help" class="footer-link">Help & FAQ</a>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
