<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <li><a href="index.php?page=content">골드</a></li>
      <li><a href="index.php?page=character">캐릭</a></li>
    </ol>
    <h2>
      <?php
        echo $_GET['page'];
       ?>
    </h2>
    <br>
    <?php
      echo file_GET_contents("data/".$_GET['page']);
     ?>

</html>
