<form action="index.php?site=gebucht" method="post">
    <legend>Neue Buchung</legend>
    <label for="anreise">Anreise:</label>
    <input type="date" name="anreise">
    <label for="abreise">Anreise:</label>
    <input type="date" name="abreise">
    <div>
        <label for="fruehstueck">Mit Frühstück</label>
        <input type="checkbox" name="fruehstueck" class="checkbox" checked/>
    </div>
    <div>    
        <label for="parkplatz">Mit Parkplatz</label>
        <input type="checkbox" name="parkplatz" class="checkbox" checked/>
    </div>
    <div>
        <label for="haustier">Mit Haustier</label>
        <input type="checkbox" name="haustier" class="checkbox" />
    </div>
    <label for="anzahlHaustiere">Anzahl Haustiere:</label>
    <input type="number" name="abreise">
    <label for="tierart">Tierart:</label>
    <input type="text" name="tierart">
    <button type="submit">Buchen</button>
</form>