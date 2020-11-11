<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $Array= array("A","B","C","D");
    echo "$Array[2]<br />";
    echo $Array[0].'<br />';
    var_dump(count($Array)); // count() 원소 개수
    array_push($Array,"F");
    var_dump($Array);
     ?>
  </body>
</html>
