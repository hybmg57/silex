<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    $startTime = microtime(true);
    $counter=0;
    while($counter == 1000000000000){
        serialize($name);
        $counter++;
    }
    $endTime = microtime(true);
    $elapsed = $endTime - $startTime;
    echo "Start: $startTime<br>";
    echo "End: $endTime<br>";
    return "Execution time : $elapsed seconds";

//    return 'Hello '.$app->escape($name);
});

$app->run();