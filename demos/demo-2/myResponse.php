<?php
  $nm=$_GET['myName'];
  $s1=$_GET['sub1'];
  $s2=$_GET['sub2'];
  $s3=$_GET['sub3'];

  $flag=0;
  if ($s1<35) { $flag++; }
  if ($s2<35) { $flag++; }
  if ($s3<35) { $flag++; }

  switch ($flag) {
    case 1:
      echo "Result : ATKT";
      break;
    case 2:
      echo "Result : ATKT";
      break;
    case 3:
        echo "Result : Fail";
        break;
    default:
      $tot=($s1+$s2+$s3);
      $per=$tot/3;
      echo "Total : ".$tot."<br>";
      echo "Percentage : ".$per."<br>";

      if ($per>=70) {
        echo "Class : Distinction";
      }
      elseif ($per>=60) {
          echo "Class : First Class";
      }
      elseif ($per>=50) {
          echo "Class : Second Class";
      }
      else {
          echo "Class : Pass";
      }
      break;
  }
?>
