<?php
function print_title(){
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else {
      echo "Welcom";
    }
} 
function print_list(){
  $list = scandir('./data'); //scandir() 디렉토리 안에있는 파일을 배열로 가져옴
  for($i=0; $i<count($list); $i++){
    if($list[$i] != "." && $list[$i] != ".." ){
      echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li><br />";
    }
  }
}
function print_discription (){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
       ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        print_list();
       ?>
    </ol>
    <h2>
      <?php
        print_title();
       ?>
    </h2>
    <?php
    print_discription();
     ?>
  </body>
</html>
