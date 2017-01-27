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
        if (!property_exists($jsonData, "system")) {
			$jsonData->system = false;
			if (property_exists($jsonData, "talk") && $jsonData->talk)
				$jsonData->talk->description = $Parsedown->text(file_get_contents("speakers_data/" . $dirname . "/talk_description.md"));
				
			if (property_exists($jsonData, "speaker") && $jsonData->speaker) {
				$jsonData->speaker->about = $Parsedown->text(file_get_contents("speakers_data/" . $dirname . "/speaker_about.md"));
				$jsonData->speaker->images = glob("speakers_data/" . $dirname . "/*.{gif,jpg,png}", GLOB_BRACE);	
				$jsonData->speaker->dirname = $dirname;
			}

			if (property_exists($jsonData, "workshop") && $jsonData->workshop)
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
        return '<span class="speaker">'.$speakerData->speaker->name.'</span>'.'<a class="talk-link" href="'.$dir.'">'.$speakerData->talk->title.'</a>';
    }
}

function renderTalkInfo($data) 
{
    if (!$data) {
		return '';
    } else {
        return '<td><span class="speaker">'.$speakerData->speaker->name.'</span>'.'<a class="talk-link" href="'.$dir.'">'.$speakerData->talk->title.'</a></td>';
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
    $speakers = array();
    $schedule = array();
    foreach (glob($_SERVER['DOCUMENT_ROOT'] . '/speakers_data/*', GLOB_ONLYDIR) as $dir) {
		$data = getSpeakerDataByDirName($dir);
		if ($data && property_exists($data, "talk")) {
			if (!$data->system)
				array_push($speakers, $data);
        
			$schedule[$data->talk->date][$data->talk->time][$data->talk->track] = $data;
		}
    }

    return array(
		"speakers" => $speakers,
		"schedule" => $schedule
    );
}

function renderTalkTeaser($speaker)
{
    $speakerData = $speaker;
    
    if (count($speakerData->speaker->images) == 0)
		return false;

    if ($speaker->talk->description) {
        require __DIR__ . '/templates/talk_teaser.php';
        return true;
    } else { 
		return false;
	}
}

function renderTalkTeasers($arrSpeakers)
{
    foreach ($arrSpeakers as $speaker) {
        renderTalkTeaser($speaker);
    }
}


function renderDay($schedule, $day)
{
	$timeArr = array_keys($schedule[$day]);
	$tracks = array_keys($schedule[$day][reset($timeArr)]);
	sort($timeArr);
	require __DIR__ . '/templates/program_day.php';
}

function renderMainProgram() 
{
	$data = getAllSpeakerData();
	$schedule = $data["schedule"];
	$days = array_keys($schedule);
	sort($days);
	foreach ($days as $day)
		renderDay($schedule, $day);
		
}

