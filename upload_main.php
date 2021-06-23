<!DOCTYPE html>
<meta charset="utf-8">
<html>
  <head>
    <title>DDT!</title>
  </head>
  <body>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
    <center><p style="background-color: aliceblue; height: 120px; text-align:center;">
      <b style="margin-top: 5px;">Put your music here!</b>
      <br> </br>
      <input type="file" name="file">
      <input type="submit" value="Upload">
    
    </p></center>
  </form>

  <?php
  $files=scandir("uploads");
  
  for($a = 2; $a < count($files); $a++){
    ?>
    <p>
      <?php echo $files[$a]; ?>

      <a href="uploads/<?php echo $files[$a]; ?>" target="_blank" download="<?php echo $files[$a]; ?>">
      re-down</a>
      <a href="delete.php?name=uploads/<?php echo $files[$a];?>" target="_blank" style="color: red;">
      delete</a>
    </p>
    <?php
  }
  ?>

  </body>
</html>