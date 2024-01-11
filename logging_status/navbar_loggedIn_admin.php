<header> 
 <nav class="navbar navbar-expand-xl bg-body-tertiary">
    <div class="container-fluid">
      <div class="header_logo d-flex justify-content-center">
        <a href="/DOCUMENT_ROOT/index.php?site=homepage">
            <img src="/DOCUMENT_ROOT/pictures/wohlfuehloase_logo.png" alt="Change to Wohlfühloase Logo" id="navbar-image">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  navigation-link" style="font-size: 25px" href="#"> Hallo, <?php echo "Admin"?>!</a>
          </li>  
          <li class="nav-item">
          <a class="nav-link  navigation-link" style="font-size: 25px" href="/DOCUMENT_ROOT/index.php?site=gebucht">Reservierungen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigation-link" style="font-size: 25px" href="/DOCUMENT_ROOT/index.php?site=news">News</a>
          </li>
          <li class="nav-item">
          <a class="nav-link navigation-link" style="font-size: 25px" href="/DOCUMENT_ROOT/index.php?site=CMS">CMS</a>
          </li> 
          <li class="nav-item">
          <a class="nav-link navigation-link" style="font-size: 25px" href="/DOCUMENT_ROOT/index.php?site=users">Alle User</a>
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