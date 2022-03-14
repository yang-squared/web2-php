<!doctype html>
<?php
require('lib/print.php');
 ?>
<html>
<head>
  <title><?php print_title(); ?></title>
  <meta charset="utf-8">
<?php
require('lib/style.php');
 ?>

</head>


<body>
  <h1><center><a href="mainhome.php">나만의 로아페이지</a></center></h1>
  <div class="title" >
    <center><h3>
    <?php
      print_catagory();
       ?>
    <center></h3>
  </div>

  <br>

  <div class="left-col">
    <h2><center>참고 목록</center></h2>
      <strong>내 캐릭터</strong>
      <ol>
        <li><a href="https://loawa.com/char/%ED%95%98%EB%8A%98%EC%97%90%EB%B0%B0" target="_blank">하늘에배</a></li>
        <li><a href="https://loawa.com/char/%ED%95%98%EB%8A%98%EC%97%90%EC%B0%BD" target="_blank">하늘에창</a></li>
        <li><a href="https://loawa.com/char/%ED%95%98%EB%8A%98%EC%97%90%EB%A0%88" target="_blank">하늘에레</a></li>
        <li><a href="https://loawa.com/char/%ED%95%98%EB%8A%98%EC%97%90%EC%96%91" target="_blank">하늘에양</a></li>
      </ol>
        <strong>참고 캐릭터</strong>
        <ol>
          <li><a href="https://loawa.com/char/%ED%95%84%EB%A1%80" target="_blank">필례</a></li>
          <li><a href="https://loawa.com/char/%EC%9C%A0%EC%84%9C%EB%A6%B0" target="_blank">유서린</a></li>
          <li><a href="https://loawa.com/char/%EB%89%B4%EC%84%9C%EB%A6%B0" target="_blank">뉴서린</a></li>
          <li><a href="https://loawa.com/char/%ED%8F%AC%EC%84%9C%EB%A6%B0" target="_blank">포서린</a></li>
        </ol>
        <br>
        <p></p>

  </div>

  <div class="right-col">
    <h2><center>친구 목록</center></h2>
        <p><center><strong><a href="">친구1</a></strong></center></p>
        <p><center><strong><a href="">친구2</a></strong></center></p>
        <p><center><strong><a href="">친구3</a></strong></center></p>
        <p><center><strong><a href="">친구4</a></strong></center></p>
  </div>
  <?php
  print_decription();
   ?>
 </center></h2>
  </body>
</html>
