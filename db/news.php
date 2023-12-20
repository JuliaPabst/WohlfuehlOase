<div class = "newsBeitrag">
<?php
  require("dbaccess.php");

  $sql = "SELECT Titel, Lead, Textfeld FROM news";
  $result = $db_obj->query($sql);

  
  while ($row = $result->fetch_array()) {
    echo '<div class = "newsBeitrag">';
    echo '<img src="/DOCUMENT_ROOT/uploads/thumbnails/thumb_'. preg_replace('/\s+/', '', $row["Titel"]) .'.jpeg" class="thumbnail">';
    echo '<h4 class="newsHeadline">'.$row["Titel"].'</h4>';
    echo '<p style="font-weight: 600;">'.$row["Lead"].'</p>';
    echo '<p>'.$row["Textfeld"].'</p>';
    echo '</div>';
  } 
?>
