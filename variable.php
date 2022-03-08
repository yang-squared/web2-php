<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>변수및 조건문 반복문 연습</h2>
    <?php
    $x = 0;
    $y = 0;
    for($x = 0; $x < 11; $x++){
      for($y = 0; $y < 11; $y++){
        if($x == $y){
          print('1');
        }
        else if($x + $y == 10){
          print('1');
        }
        else{
          print('0');
        }
      }
      print('<br />');
    }
     ?>
  </body>
</html>
