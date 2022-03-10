<!doctype html>
<?php
  function print_catagory(){
    $list = scandir('mainhomedata');
    for($i = 0; $i < count($list); $i++){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          ?>
          <a href="mainhome.php?page=<?=$list[$i]?>"><?=$list[$i]?></a>
          <?php
        }
      }
    }
  }
  function print_decription(){
    $page = null;
      if(isset($_GET['page'])){
        echo file_GET_contents("mainhomedata/".$_GET['page']);
      }
      else{
        ?><br><br>
        <h2><center>
        <?php
        Echo '환영합니다. 시작페이지입니다.';
      }
    }
?>
<html>
<head>
  <title>example page</title>
  <meta charset="utf-8">

  <style>
    a{
      color: #000;
      text-decoration-line: none;
    }
    div{
      margin-top: 5px;
    }
    div.main-title{
        width: 95%;
        float: left;
        display: inline;
        margin-left: 10px;
        margin-right: 10px;
        padding: 10px;
      }

    div.title{
        background-color: gray;
        width: 95%;
        float: left;
        display: inline;
        margin-bottom: 10px;
        margin: 10px;
        word-spacing: 50px;
      }

    div.left-col{
        background-color: skyblue;
        float: left;
        width: 15%;
        height: max;
        margin-left: 10px;
        margin-right: 10px;
        overflow: hidden;
      }

    div.center-col{
      background-color: yellowgreen;
      margin-top: 10px;
      margin-left: 10px;
      width: max;
      float: center;
      display: block;
      overflow: hidden;
    }

    div.right-col{
      background-color: skyblue;
      float: right;
      width: 15%;
      height: max;
      margin-left: 10px;
      overflow: hidden;
      }
  </style>
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
        <p><center><strong><a href="">송창현</a></strong></center></p>
        <p><center><strong><a href="">이우민</a></strong></center></p>
        <p><center><strong><a href="">김홍구</a></strong></center></p>
        <p><center><strong><a href="">신희범</a></strong></center></p>
  </div>
  <?php
  print_decription();
   ?>
 </center></h2>
  </body>
</html>
