<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        $list = scandir('./data'); //scandir() 디렉토리 안에있는 파일을 배열로 가져옴
        for($i=0; $i<count($list); $i++){
          if($list[$i] != "." && $list[$i] != ".." ){
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li><br />";
          }
        }
       ?>
    </ol>
    <h2>
      <?php
        if(isset($_GET['id'])){
          echo $_GET['id'];
        } else {
          echo "Welcom";
        }
       ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP";
    }
     ?>
  </body>
</html>
