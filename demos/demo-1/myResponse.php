<?php
  $nm=$_GET['myName'];  // using $_GET super global
  $g=$_GET['gender'];

  if ($g=="m") {
      echo "Welcome <font color='SlateBlue'>".$nm."</font> Sir";
  }
  elseif ($g=="m") {
      echo "Welcome <font color='#FF6347'>".$nm."</font> Madam";
  }
  else {
      echo "Welcome ".$nm;
  }
 ?>
