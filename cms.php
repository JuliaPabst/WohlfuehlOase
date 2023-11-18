<form action="index.php?site=CMS" enctype="multipart/form-data" method="post">
    <label for="thumbnail">Thumbnail</label>      
    <input type="file" name="thumbnail" accept="image/jpeg" required>    
    <label for="titel">Titel</label>   
    <input type="text" name="titel" required>
    <label for="text">Text</label>
    <textarea name="text" required></textarea>
    <button type="submit">Senden</button>
</form>

<?php

if(isset($_FILES["thumbnail"])){
    if($_FILES["thumbnail"]["type"] == "image/jpeg"){
        $imageName =  uniqid() . "_" .$_FILES["thumbnail"]["name"];
        $urlPathClient= '/DOCUMENT_ROOT/uploads/' . $imageName;
        $destinationServer = getcwd() . "\\uploads\\" . $imageName;
        move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $destinationServer);
        
    
         // Create a thumbnail
         $thumbnailFilename = "thumb_" . $imageName;
         $thumbnailDestination = getcwd() . "\\uploads\\thumbnails\\" . $thumbnailFilename;
 
         $urlPathThumbnail = '/DOCUMENT_ROOT/uploads/thumbnails/' . $thumbnailFilename;
         list($originalWidth, $originalHeight) = getimagesize($destinationServer);
         $thumbnailWidth = 720;
         $thumbnailHeight = 480;
 
         $originalImage = imagecreatefromjpeg($destinationServer);
         $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
 
         imagecopyresampled(
             $thumbnailImage,
             $originalImage,
             0,
             0,
             0,
             0,
             $thumbnailWidth,
             $thumbnailHeight,
             $originalWidth,
             $originalHeight
         );
 
         imagejpeg($thumbnailImage, $thumbnailDestination);
 
         // Free up memory
         imagedestroy($originalImage);
         imagedestroy($thumbnailImage);
    
         echo "<div><image src='$urlPathThumbnail'></div>";
         echo '<h1>' . $_POST["titel"] . '</h1>';
         echo '<p>' . $_POST["text"] . '</p>';
    }
}
?>