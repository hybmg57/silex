<?php
$startTime = microtime(true);
    $counter=0;
    while($counter == 1000000000000){
        serialize($name);
        $counter++;
    }
    $endTime = microtime(true);
    $elapsed = $endTime - $startTime;
    echo "\nStart: $startTime\n";
    echo "End: $endTime\n";
    echo "Execution time : $elapsed seconds\n\n";
