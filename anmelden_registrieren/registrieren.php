<form action = "index.php?site=homepage" method = "post" class="registrierung-wrapping">
  <fieldset>
    <legend>Registrierung</legend>
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
        placeholder="Vorname"
        required
      />
    </div>
    <div>
      <label for="nachname">Nachname:</label>
      <input
        type="text"
        name="nachname"
        placeholder="Nachname"
        required
      />
    </div>
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
    <button type="submit" class="submit-button">Senden</button>
  </fieldset>
</form>
    
