<?php
function rekursif($i){
        $c = $i;
    rek($c);
    echo "<br>";
    $i--;
    if($i>0){
        rekursif($i);
    }
  }

  function rek($k){
    echo "*";
    $k--;
    if ($k > 0) {
        rek($k);
        }
    }

  rekursif(5);

  echo"<br> ================= <br>";

$batas=1;
function reke($y = 1){

global $batas;
echo "$y";
$y++;
if ($y<=$batas) {
    reke($y);
}else {
    echo "<br>";
    $batas++;
    if ($batas<=5) {
        reke();
        }
    }
}

     
    reke();
?>
