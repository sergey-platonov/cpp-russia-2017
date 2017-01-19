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

    $dirname = basename($dir);

    $fileContents = file_get_contents("speakers_data/" . $dirname . "/data.json");
    
    if ($fileContents) {
        $jsonData = json_decode($fileContents);

        $jsonData->speaker->about = $Parsedown->text(file_get_contents("speakers_data/" . $dirname . "/speaker_about.md"));
		$jsonData->speaker->images = glob("speakers_data/" . $dirname . "/*.{gif,jpg,png}", GLOB_BRACE);
		
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

function getTalkInfo($dir) 
{
	$speakerData = getSpeakerDataByDirName($dir);
    if (!$speakerData) {
		return '';
    } else {
        return '<span class="speaker">'.$speakerData->speaker->name.'</span>'.'<a href="'.$dir.'">'.$speakerData->talk->title.'</a>';
    }
}

function getWorkshopTitle($dir) 
{
	$speakerData = getSpeakerDataByDirName($dir);
    if (!$speakerData) {
		return '';
    } else {
        return '<a href="'.$dir.'">'.$speakerData->workshop->title.'</a>';
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
