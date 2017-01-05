<?php
include("partial.php");
include("vendor/autoload.php");


/**
 * return all speaker data in array
 * @return array
 */

function getSpeakerDataByDirName($dir)
{
    $Parsedown = new Parsedown();
    // $Parsedown->text('Hello _Parsedown_!')

    $dirname = basename($dir);

    $fileContents = file_get_contents("speakers_data/" . $dirname . "/data.json");
    
    if ($fileContents) {
        $jsonData = json_decode($fileContents);

        $jsonData->speaker->about = $Parsedown->text(file_get_contents("speakers_data/" . $dirname . "/speaker_about.md"));

        $jsonData->speaker->image = "/speakers_data/" . $dirname . "/photo.jpg";

        $jsonData->speaker->dirname = $dirname;

        if ($jsonData->talk) {
            $jsonData->talk->description = $Parsedown->text(file_get_contents("speakers_data/" . $dirname . "/talk_description.md"));
        }

        if ($jsonData->workshop) {
            $jsonData->workshop->description = $Parsedown->text(file_get_contents("speakers_data/" . $dirname . "/workshop_description.md"));
        }

        return $jsonData;
    } else {
        return false;
    }
}

function getAllSpeakerData()
{
    $arr = array();
    foreach (glob($_SERVER['DOCUMENT_ROOT'] . '/speakers_data/*', GLOB_ONLYDIR) as $dir) {
        array_push($arr, getSpeakerDataByDirName($dir));
    }

    return $arr;
}

function renderTalkTeaser($speaker)
{
    $speakerData = $speaker;

    if ($speaker->talk->description) {
        require __DIR__ . '/templates/talk_teaser.php';
        return true;
    } else return false;
}

function renderTalkTeasers($arrSpeakers)
{
    foreach ($arrSpeakers as $speaker) {
        renderTalkTeaser($speaker);
    }
}