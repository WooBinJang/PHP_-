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
function print_discription(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
 ?>
