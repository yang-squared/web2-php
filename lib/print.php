<?php
  function print_title(){
    if(isset($_GET['page'])){
      echo htmlspecialchars($_GET['page']);
    }
    else{
      Echo '입장페이지';
    }
  }
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
