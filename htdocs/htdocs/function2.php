<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h1>Basic</h1>
    <?php
      function basic() {
        print "Lorem ipsum dolor sit amet1<br />";
        print "Lorem ipsum dolor sit amet2<br />";
      }
      basic();
      basic();
      basic();
     ?>
     <h2>parameter &amp; argument</h2>
     <?php
     function sum($left , $right){ // 매겨변수 = parameter
       return $left +$right;
     }
     print(sum(2,4)); // argument =입력한 실제 값
     file_put_contents('result.txt',sum(4,4)); //file_put_contents?(파일생성,생성할 파일 내용);
      ?>
  </body>
</html>
