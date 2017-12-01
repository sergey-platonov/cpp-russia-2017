<?php
include ("./loader.php");

$GLOBALS["prefix"] = basename(__DIR__);
$GLOBALS['project_root'] = __DIR__;

$router = new AltoRouter();
// map homepage
$router->map( 'GET',  '/[i:year]/', function($year) {
    require __DIR__ . '/main.php';
});

// map all talks page
$router->map( 'GET', '/[i:year]/talks', function($year) {
    $arrSpeakers = getAllSpeakerData(__DIR__)["speakers"];
    require __DIR__ . '/templates/talks.php';
});

// map talk details page
$router->map( 'GET', '/[i:year]/talks/[*:speaker]', function($year, $speaker) {
    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        echo "Запрашиваемая страница не найдена";
    } else {
        require __DIR__ . '/templates/talk.php';
    }
});

// map workshop details page
$router->map( 'GET', '/[i:year]/workshops/[*:speaker]', function($year, $speaker) {
    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        echo "Запрашиваемая страница не найдена ";
    } else {
        require __DIR__ . '/templates/workshop.php';
    }
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    print $_SERVER['REQUEST_URI'];
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
