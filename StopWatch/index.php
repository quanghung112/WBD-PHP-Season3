<?php
include 'StopWatch.php';
$stopWatch=new StopWatch();
for ($i=0;$i<10000;$i++){
    for ($j=0;$j>10000;$j++){
        $total=$i+$j;
    }
}
$stopWatch->endTime();
echo $stopWatch->getElapsedTime();
?>
