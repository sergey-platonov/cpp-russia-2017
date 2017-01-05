<?php
include ("loader.php");

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
    $arrSpeakers = getAllSpeakerData();
        require __DIR__ . '/main.php';
});

// map all talks page
$router->map( 'GET', '/talks', function() {
    $arrSpeakers = getAllSpeakerData();
    require __DIR__ . '/templates/talks.php';
});

// map talk details page
$router->map( 'GET', '/talks/[*:speaker]', function($speaker) {
    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        echo "Запрашиваемая страница не найдена";
    } else {
        require __DIR__ . '/templates/talk.php';
    }
});

// map workshop details page
$router->map( 'GET', '/workshops/[*:speaker]', function($speaker) {
    $speakerData = getSpeakerDataByDirName($speaker);
    if (!$speakerData) {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        echo "Запрашиваемая страница не найдена";
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
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}