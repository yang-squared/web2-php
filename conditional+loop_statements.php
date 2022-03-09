<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <?php
    $list = scandir('data');
    for($i = 0; $i<count($list); $i++){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          ?>
          <li><a href="index.php?page=<?=$list[$i]?>"><?=$list[$i]?></a></li>
          <?php
        }
      }
    }
     ?>
    <h2>
      <?php
      $page = null;
        if(isset($_GET['page'])){
          echo $_GET['page'];
        }
        else{
          Echo 'welcome this index.php';
        }
       ?>
    </h2>
    <br>
    <?php
    if(isset($_GET['page'])){
      echo file_GET_contents("data/".$_GET['page']);
    }

     ?>

</html>
