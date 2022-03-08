<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $str = "문자열 선언



      아무말이나 적습니다.";
      echo $str;
     ?>
     <h2>함수strlen()</h2>
     <?php
     echo strlen($str);
      ?>
      <h2>bl2br줄바꿈</h2>
      <?php
      echo nl2br($str);
       ?>
  </body>
</html>
