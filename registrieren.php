<form action = "auswertung.php" method = "get" class="registrierung-wrapping">
  <fieldset>
    <legend>Registrierung</legend>
    <div>
      <label for="Anrede">Anrede:</label>
      <select name="Anrede" id="Anrede" required>
        <option disabled selected>Bitte auswählen</option>
        <option value="Frau">Frau</option>
        <option value="Herr">Herr</option>
        <option value="Keine Anrede">Keine Anrede</option>
      </select>
    </div>
    <div>
      <label for="Vorname">Vorname:</label>
      <input
        type="text"
        name="Vorname"
        id="Vorname"
        placeholder="Vorname"
        required
      />
    </div>
    <div>
      <label for="Nachname">Nachname:</label>
      <input
        type="text"
        name="Nachname"
        id="Nachname"
        placeholder="Nachname"
        required
      />
    </div>
    <div>
      <label for="E-Mail">E-Mail:</label>
      <input
        type="email"
        name="E-Mail"
        id="E-Mail"
        placeholder="E-Mail"
        required
      />
    </div>
    <div>
      <label for="Username">Username:</label>
      <input
        type="text"
        name="Username"
        id="Username"
        placeholder="Username"
        required
      />
    </div>
    <div>
      <label for="Passwort1">Passwort:</label>
      <input
        type="password"
        name="Passwort1"
        placeholder="Passwort"
        required
      />
    </div>
    <div>
      <label for="Passwort2">Passwort wiederholen:</label>
      <input
        type="password"
        name="Passwort2"
        placeholder="Passwort"
        required
      />
    </div>
    <div>
      <input type="checkbox" name="Newsletter" value="Newsletter" checked class="checkbox"/>
      <label>Ich möchte mich zum Newletter anmelden!</label>
    </div>
    <div>
      <input type="checkbox" name="AGB" value="AGB" class="checkbox" />
      <label
        >Ich habe die
        <a
          href="https://www.wko.at/branchen/tourismus-freizeitwirtschaft/hotellerie/AGBH_061115.pdf"
          >AGB</a
        >
        gelesen!</label
      >
    </div>
    <button type="Submit" class="submit-button">Senden</button>
  </fieldset>
</form>
    
