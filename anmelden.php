<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css" />
    <title>Anmelden</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg no-margin container-fluid">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo "/DOCUMENT_ROOT/index.php"; ?>"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo "/DOCUMENT_ROOT/help.php"; ?>"
                  >Hilfe</a
                >
              </li>
              <li class="nav-item">
                <button>
                <a href="<?php echo "/DOCUMENT_ROOT/anmelden.php"; ?>" class="button-text">Anmelden</a>
                </button>
              </li>
              <li class="nav-item">
                <button>
                <a href="<?php echo "/DOCUMENT_ROOT/registrieren.php"; ?>" class="button-text"
                    >Registrieren</a
                  >
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <form>
      <fieldset>
        <legend>Anmelden</legend>
        <div>
          <label for="Username">Username: </label> 
          <input
            type="text"
            name="Username"
            id="Username"
            placeholder="Username"
            required
          />
        </div>
        <div>
          <label for="Passwort">Passwort: </label>
          <input
            type="password"
            name="Passwort"
            id="Passwort"
            placeholder="Passwort"
            required
          />
        </div>
        <button type="submit" class="submit-button">Submit</button>
      </fieldset>
    </form>
    <footer>
      <a href="<?php echo "/DOCUMENT_ROOT/impressum.php"; ?>" class="footer-link">Impressum</a>
      <a href="<?php echo "/DOCUMENT_ROOT/help.php"; ?>" class="footer-link">Help & FAQ</a>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
