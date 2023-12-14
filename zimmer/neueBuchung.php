<form action="zimmer/checkReservierungen.php" method="post">
    <legend>Neue Buchung</legend>
    <?php 
    if(isset($_SESSION["anreiseVorHeute"]) && $_SESSION["anreiseVorHeute"] == 1){
        echo "<label style='font-weight: 600;'>Wählen Sie ein Anreisedatum in der Zukunft!</label></br>";
    }
    ?>

    <?php 
    if(isset($_SESSION["anreiseNachAbreise"]) && $_SESSION["anreiseNachAbreise"] == 1){
        echo "<label style='font-weight: 600;'>Sie müssen anreisen, bevor Sie abreisen können!</label></br>";
    }
    ?>

    <label for="anreise">Anreise:</label>
    <input type="date" name="anreise" required>

    <?php 
    if(isset($_SESSION["abreiseVorHeute"]) && $_SESSION["abreiseVorHeute"] == 1){
        echo "<label style='font-weight: 600;'>Wählen Sie ein Abreisedatum in der Zukunft!</label></br>";
    }
    ?>

    <label for="abreise">Abreise:</label>
    <input type="date" name="abreise" required>
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
    <label for="infosHaustier">Mehr Informationen zum Haustier:</label>
    <input type="text" name="infosHaustier">
    <input type="submit">
</form>