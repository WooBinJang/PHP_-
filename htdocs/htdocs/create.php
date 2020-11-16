<?php
require_once('lib/print.php');
require_once('view/top.php');
 ?>
    <form action="create_action.php" method="post">
      <p><input type="title" name="title" placeholder="title"/></p>
      <p><textarea name="discription" placeholder="discription"></textarea></p>
      <p><input type="submit"></p>
<?php
require_once('view/bottom.php');
?>
