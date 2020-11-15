<?php
rename('data/'.$_GET['old_title'], 'data/'.$_POST['title']);
file_put_contents('data/'.$_POST['title'] , $_POST['discription']);
header('Location: /index.php?id='.$_POST['title']);
 ?>
