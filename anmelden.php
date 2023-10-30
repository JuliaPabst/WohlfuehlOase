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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
