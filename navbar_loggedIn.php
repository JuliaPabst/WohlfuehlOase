<header> 
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="header_logo d-flex justify-content-center">
        <a href="/DOCUMENT_ROOT/index.php?site=homepage">
            <img src="/DOCUMENT_ROOT/pictures/puntelogo.svg" alt="Change to Wohlfühloase Logo" id="navbar-image">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            Hallo, <?php echo $_SESSION["usernameLoggedIn"]?>!
          </li>  
        <li class="nav-item">
            <a class="nav-link navigation-link" href="/DOCUMENT_ROOT/index.php?site=help">Hilfe</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navigation-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reservierungen
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item navigation-link" href="/DOCUMENT_ROOT/index.php?site=gebucht">Gebuchte Reservierungen</a></li>
              <li><a class="dropdown-item navigation-link" href="/DOCUMENT_ROOT/index.php?site=neueReservierung">Neue Reservierung</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link navigation-link" href="/DOCUMENT_ROOT/index.php?site=profil">Profil bearbeiten</a>
          </li>  
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <form action="index.php?site=homepage" method="post">
                <input hidden name="logOut" value="logOut">
                <button type="submit">Abmelden</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>