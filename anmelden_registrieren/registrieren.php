<form action = "db/checkregistrieren.php" method = "post" class="registrierung-wrapping">
  <fieldset>
    <legend>Registrierung</legend>
    <?php
      if(isset($_SESSION["bereitsAccount"]) && $_SESSION["bereitsAccount"] == 1){
        echo "<label style='font-weight: 600;'>Dieser Username ist leider bereits vergeben!</label>";
      }
      if(isset($_SESSION["anredeVergleich"]) && ($_SESSION["anredeVergleich"] == 0)){
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
        placeholder="Vorname"
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
        placeholder="Nachname"
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
        placeholder="E-Mail"
        required
      />
    </div>
    <div>
      <label for="username">Username:</label>
      <input
        type="text"
        name="username"
        placeholder="Username"
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
        placeholder="Passwort"
        required
      />
    </div>
    <div>
      <label for="passwort2">Passwort wiederholen:</label>
      <input
        type="password"
        name="passwort2"
        placeholder="Passwort"
        required
      />
    </div>
    <div>
      <input type="checkbox" name="newsletter" value="Newsletter" checked class="checkbox"/>
      <label>Ich möchte mich zum Newletter anmelden!</label>
    </div>
    <div>
      <input type="checkbox" name="AGB" value="AGB" class="checkbox" required/>
      <label
        >Ich habe die
        <a
          href="https://www.wko.at/branchen/tourismus-freizeitwirtschaft/hotellerie/AGBH_061115.pdf"
          >AGB</a
        >
        gelesen!</label
      >
    </div>
    <button type="submit" class="submit-button">Senden</button>
  </fieldset>
</form>
    
