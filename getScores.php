<?php

require_once 'common.php';
$dao = new HighscoreDAO();
$scores = $dao->getAll(); // Get an Indexed Array of highscore objects

$items = [];
foreach( $scores as $score_object ) {
    $item = [];
    $item["id"] = $score_object->getID();
    $item["name"] = $score_object->getName();
    $item["RLGL"] = $score_object->getRLGL();
    $item["TOW"] = $score_object->getTOW();
    $item["Marble"] = $score_object->getMarble();
    $item["Glass"] = $score_object->getGlass();
    $items[] = $item;
}
// make posts into json and return json data
$scoresJSON = json_encode($items);
echo $scoresJSON;
?>

