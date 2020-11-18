<?php
function print_title(){
    if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']);
    } else {
      echo "Welcom";
    }
}
function print_list(){
  $list = scandir('./data'); //scandir() 디렉토리 안에있는 파일을 배열로 가져옴
  for($i=0; $i<count($list); $i++){
    $title = htmlspecialchars($list[$i]);
    if($list[$i] != "." && $list[$i] != ".." ){
      echo "<li><a href=\"index.php?id=$title\">$title</a></li><br />";
    }
  }
}
function print_discription(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
  } else {
    echo "Hello, PHP";
  }
}
 ?>
