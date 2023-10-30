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
    <title>Registrieren</title>
  </head>
  <body>
    <form action = "auswertung.php" method = "get" >
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
          <input type="checkbox" name="Newsletter" value="Newsletter" checked class="checkbox" />
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
