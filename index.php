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
    <link rel="stylesheet" href="/DOCUMENT_ROOT/style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="header_logo d-flex justify-content-center">
            <a href="/DOCUMENT_ROOT/index.php?site=homepage">
                <img src="/DOCUMENT_ROOT/pictures/puntelogo.svg" alt="Change to Wohlfühloase Logo">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/DOCUMENT_ROOT/index.php?site=help">Hilfe</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <button>
                  <a href="/DOCUMENT_ROOT/index.php?site=anmelden" class="button-text">Anmelden</a>
                </button>
              </li>
              <li class="nav-item">
              <button>
                  <a href="/DOCUMENT_ROOT/index.php?site=registrieren" class="button-text">Registrieren</a>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

 <?php
  if($_GET['site'] == "homepage"){
   include 'homepage.php';
  }

  if($_GET['site'] == "help"){
    include 'help.php';
   }

  if($_GET['site'] == "anmelden"){
    include 'anmelden.php';
  }

  if($_GET['site'] == "registrieren"){
    include 'registrieren.php';
  }

  if($_GET['site'] == "impressum"){
    include 'impressum.php';
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
