<div class = "newsBeitrag">
<?php
  require("dbaccess.php");

  $sql = "SELECT id, Titel, Lead, Textfeld,Datum FROM news ORDER BY id desc";
  $result = $db_obj->query($sql);

  if(isset($_POST["id"])) {
    $sqlDelete = "DELETE FROM news WHERE id = ?";
      $stmt = $db_obj->prepare($sqlDelete);
      $stmt->bind_param("i", $_POST["id"]);
      $stmt->execute();
  }

  $noNews = 1;

  
  while ($row = $result->fetch_array()) {
    echo '<div class = "newsBeitrag">';
    echo '<img src="/DOCUMENT_ROOT/uploads/thumbnails/thumb_'. preg_replace('/\s+/', '', $row["Titel"]) .'.jpeg" class="thumbnail">';
    echo '<h4 class="newsHeadline">'.$row["Titel"].'</h4>';
    echo '<p style="font-weight: 600;">'.$row["Datum"].'</p>';
    echo '<p style="font-weight: 600;">'.$row["Lead"].'</p>';
    echo '<p>'.$row["Textfeld"].'</p>';
    echo '</div>';

    if(isset($_SESSION["anmeldeStatus"]) && $_SESSION["anmeldeStatus"] == 1){
      echo '<form action="index.php?site=news" method="POST" style="text-align: center;">
        <input name="id" value="'.$row['id'].'" hidden>
        <button type="submit style="margin: auto; display: block;">Löschen</button>
        </form>';
    }

    $noNews = 0;
  } 

  if($noNews == 1){
    echo "<p>Es gibt leider keine Artikel!</p>";
  }


?>
