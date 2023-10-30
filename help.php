<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help & FAQs</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <h1 id="hilfe">Hilfe</h1>
    <main id="hilfe-main">
      <p>
        Sie erreichen uns 24 Stunden am Tag, 7 Tage die Woche! Wir freuen uns
        auf Ihren Anruf unter der Telefonnummer : +43123456789 oder über Ihre
        E-Mail an info@wohlfuehloase.at.
      </p>
      <p>Erstellen Sie einen Account, um ein Zimmer zu buchen.</p>
      <form>
        <fieldset>
          <legend>Kontakt und Frage</legend>
          <div>
            <label for="Vorname">Vorname:</label><br />
            <input
              type="text"
              name="Vorname"
              id="Vorname"
              placeholder="Vorname"
              required
            />
          </div>
          <div>
            <label for="Nachname">Nachname:</label><br />
            <input
              type="text"
              name="Nachname"
              id="Nachname"
              placeholder="Nachname"
              required
            />
          </div>
          <div>
            <label for="E-Mail">E-Mail</label><br />
            <input
              type="text"
              name="E-Mail"
              id="E-Mail"
              placeholder="E-Mail"
              required
            />
          </div>
          <div>
            <label for="Frage">Frage</label><br />
            <textarea name="Frage" id="Frage">Stellen Sie eine Frage!</textarea>
          </div>

          <button type="submit">Senden</button>
          <button type="reset">Reset</button>
        </fieldset>
      </form>
    </main>
    <div id="FAQ-div">
       <h1>FAQ</h1>
      <div id="faq">
        <h2>Wann sind die Check-In und Check-Out Zeiten?</h2>
        <p>Check-In: ab 15.00 Uhr</p>
        <p>
          Reisen Sie früher an, können Sie Ihr Gepäck gerne an der Rezeption
          abstellen.
        </p>
        <p>Check-Out: bis 12.00 Uhr</p>
        <p>
          Nach dem Check-Out können Sie gerne Ihr Gepäck bei unserer Rezeption
          bis zu Ihrer Abreise abstellen.
        </p>
        <h2>Gibt es ein Frühstücksbuffet im Hotel?</h2>
        <p>
          Ja, sie können täglich aus einer Vielzahl von köstlichen Speisen
          wählen.
        </p>
        <h2>Wann kann ich frühstücken?</h2>
        <p>Unser Frühstücksbuffet gibt es täglich von 7:00 bis 11:00 Uhr.</p>
        <h2>Wie lange habe ich Zeit mein Zimmer zu stornieren?</h2>
        <p>Sie können bis zu 24 Stunden vor dem Check-In stornieren.</p>
        <h2>Wie bezahle ich mein Zimmer?</h2>
        <p>Wir bevorzugen Kartenzahlung, nehmen aber auch gerne Bargeld an.</p>
        <h2>Darf ich am Zimmer oder im Hotel rauchen?</h2>
        <p>Nein.</p>
        <h2>Wie funktioniert die Klimaanlage?</h2>
        <p>Es gibt leider keine Klimaanlage. Wir sind in Österreich.</p>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
