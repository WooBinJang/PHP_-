<?php
require_once('lib/print.php');
require_once('view/top.php');
 ?>
    <a href="create.php">Create</a>
    <?php
    if(isset($_GET['id'])) {
      ?>
    <a href="update.php">Update</a>
    <?php
      }
     ?>
     <form action="update_action.php" method="post">
       <input type="hidden" name= "old_title" value="<?php $_GET['id'] ?>"/>
       <p><input type="title" name="title" placeholder="title" value="<?php print_title(); ?>"/></p>
       <p><textarea name="discription" placeholder="discription"><?php print_discription(); ?></textarea></p>
       <p><input type="submit"></p>
     </form>
<?php
require_once('view/bottom.php');
?>
