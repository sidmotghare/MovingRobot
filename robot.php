<?php
  $x = $argv[1];
  $y = $argv[2];
  $dir = $argv[3];
  //$arr = array("R","L","W","3","L","W","3","R");
  $arr = str_split($argv[4],1);
  $n = count($arr);

  for($i=0;$i<$n;$i++){
    if($dir == 'SOUTH'){
      if($arr[$i] == 'R'){
        $dir = 'WEST';
      } else if ($arr[$i] == 'L'){
        $dir = 'EAST';
      } else if($arr[$i] == 'W'){
        $y = $y - $arr[++$i];
      }
    } else if($dir == 'NORTH'){
      if($arr[$i] == 'R'){
        $dir = 'EAST';
      } else if ($arr[$i] == 'L'){
        $dir = 'WEST';
      } else if($arr[$i] == 'W'){
        $y = $y + $arr[++$i];
      }
    } else if($dir == 'WEST'){
      if($arr[$i] == 'R'){
        $dir = 'NORTH';
      } else if ($arr[$i] == 'L'){
        $dir = 'SOUTH';
      } else if($arr[$i] == 'W'){
        $x = $x - $arr[++$i];
      }
    } else if($dir == 'EAST'){
      if($arr[$i] == 'R'){
        $dir = 'SOUTH';
      } else if ($arr[$i] == 'L'){
        $dir = 'NORTH';
      } else if($arr[$i] == 'W'){
        $x = $x + $arr[++$i];
      }
    }

  }
  echo $x ." ".$y." ".$dir;
 ?>
