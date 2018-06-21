<?php
include('Blog/include/functions.php');
$print = printHeader();
 ?>

 <?php
 
 $tag = getTag('1');

echo "<p> $tag[tagName]</p>"
  ?>
