<h2>Mein Profil bearbeiten</h2>
<form action="index.php?site=profil" method="post">
    <div>
      <label for="anrede">Anrede:</label>
      <select name="anrede" required>
        <option disabled selected>Bitte auswählen</option>
        <option value="Frau">Frau</option>
        <option value="Herr">Herr</option>
        <option value="Keine Anrede">Keine Anrede</option>
      </select>
    </div>
    <div>
      <label for="vorname">Vorname:</label>
      <input
        type="text"
        name="vorname"
        value="<?php echo $_SESSION["vorname"] ?>"
        placeholder="<?php echo $_SESSION["vorname"] ?>"
        required
      />
    </div>
    <div>
      <label for="nachname">Nachname:</label>
      <input
        type="text"
        name="nachname"
        value="<?php echo $_SESSION["nachname"] ?>"
        placeholder="<?php echo $_SESSION["nachname"] ?>"
        required
      />
    </div>
    <div>
      <label for="email">E-Mail:</label>
      <input
        type="email"
        name="email"
        value="<?php echo $_SESSION["email"] ?>"
        placeholder="<?php echo $_SESSION["email"] ?>"
        required
      />
    </div>
    <div>
      <label for="usernameLoggedIn">Username:</label>
      <input
        type="text"
        name="usernameLoggedIn"
        value="<?php echo $_SESSION["usernameLoggedIn"] ?>"
        placeholder="<?php echo $_SESSION["usernameLoggedIn"] ?>"
        required
      />
    </div>
    <div>
      <label for="passwortLoggedIn">Passwort:</label>
      <input
        type="password"
        name="passwortLoggedIn"
        value="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        placeholder="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        required
      />
    </div>
    <div>
      <label for="passwortLoggedIn">Passwort wiederholen:</label>
      <input
        type="password"
        name="passwortLoggedIn"
        value="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        placeholder="<?php echo $_SESSION["passwortLoggedIn"] ?>"
        required
      />
    </div>
    <div>
      <input type="checkbox" name="newsletter" value="<?php $_SESSION["newsletter"] ?>" checked class="checkbox"/>
      <label>Ich möchte mich zum Newletter anmelden!</label>
    </div>
    <button type="submit">Senden</button>
</form>