<h2>Mein Profil bearbeiten</h2>
<form action="db/checkprofilbearbeiten.php" method="post">
    <?php if(isset($_SESSION["anredeVergleich"]) && ($_SESSION["anredeVergleich"] == 0)){
              echo "<label style='font-weight: 600;'>Wählen Sie eine Anrede!</label>";
            }
    ?>
    <div>
      <label for="anrede">Anrede:</label>
      <select name="anrede" required>
        <option disabled selected>Bitte auswählen</option>
        <option value="Frau">Frau</option>
        <option value="Herr">Herr</option>
        <option value="Keine Anrede">Keine Anrede</option>
      </select>
    </div>
    <?php
      if(isset($_SESSION["vornameVergleich"]) && ($_SESSION["vornameVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Geben Sie einen Vornamen ohne Sonderzeichen ein!</label>";
        }
    ?>
    <div>
      <label for="vorname">Vorname:</label>
      <input
        type="text"
        name="vorname"
        value="<?php echo $_SESSION["Vorname"] ?>"
        placeholder="<?php echo $_SESSION["Vorname"] ?>"
        required
      />
    </div>
    <?php
      if(isset($_SESSION["vornameVergleich"]) && ($_SESSION["vornameVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Geben Sie einen Nachnamen ohne Sonderzeichen ein!</label>";
        }
    ?>
    <div>
      <label for="nachname">Nachname:</label>
      <input
        type="text"
        name="nachname"
        value="<?php echo $_SESSION["Nachname"] ?>"
        placeholder="<?php echo $_SESSION["Nachname"] ?>"
        required
      />
    </div>
    <?php
      if(isset($_SESSION["emailVergleich"]) && ($_SESSION["emailVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Das ist keine gültige Email-Adresse!</label>";
        }
    ?>
    <div>
      <label for="email">E-Mail:</label>
      <input
        type="email"
        name="email"
        value="<?php echo $_SESSION["Email"] ?>"
        placeholder="<?php echo $_SESSION["Email"] ?>"
        required
      />
    </div>
    <?php
      if(isset($_SESSION["bereitsAccount"]) && $_SESSION["bereitsAccount"] == 0){
        echo "<label style='font-weight: 600;'>Dieser Username ist leider bereits vergeben!</label>";
      }
    ?>
    <div>
      <label for="username">Username:</label>
      <input
        type="text"
        name="username"
        value="<?php echo $_SESSION["usernameLoggedIn"] ?>"
        placeholder="<?php echo $_SESSION["usernameLoggedIn"] ?>"
        required
      />
    </div>
    <?php
      if(isset($_SESSION["passwortVergleich"]) && ($_SESSION["passwortVergleich"] == 0)){
          echo "<label style='font-weight: 600;'>Passwörter stimmen nicht überein!</label>";
        }
    ?>
    <div>
      <label for="passwort1">Passwort:</label>
      <input
        type="password"
        name="passwort1"
        value="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        placeholder="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        required
      />
    </div>
    <div>
      <label for="passwort2">Passwort wiederholen:</label>
      <input
        type="password"
        name="passwort2"
        value="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        placeholder="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        required
      />
    </div>
    <div>
      <input type="checkbox" name="newsletter" <?php if($_SESSION["Newsletter"]){echo "checked";}?> class="checkbox"/>
      <label for="newsletter">Ich möchte mich zum Newletter anmelden!</label>
    </div>
    <button type="submit">Senden</button>
</form>