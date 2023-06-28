
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  <form method="POST" enctype="multipart/form-data">
  	<input type="file" name="img">
  	<button type="submit" name="submit">submit</button>
  </form>
</body>
</html>
<?php 

  require 'DB.php';
 if (isset($_POST['submit'])) {
    

      $fileName=$_FILES['img']['name'];
      $fileTmp=$_FILES['img']['tmp_name'];
      move_uploaded_file($fileTmp,"img/$fileName");
          $path="h".$fileName;
     $InsertInto=$db->prepare("INSERT INTO paths (img,paths) VALUES (:img ,:paths)");
     $InsertInto->bindparam("img",$fileName);
     $InsertInto->bindparam("paths",$path);
     $InsertInto->execute();
   }



 ?>