<?php

require_once 'common.php';
$dao = new HighscoreDAO();
$scores = $dao->getAll(); // Get an Indexed Array of highscore objects

$items = [];
foreach( $scores as $score_object ) {
    $item = [];
    $item["name"] = $score_object->getName();
    $item["rlgl"] = $score_object->getRLGL();
    $item["tow"] = $score_object->getTOW();
    $item["marble"] = $score_object->getMarble();
    $item["glass"] = $score_object->getGlass();
    $item["total"] = $score_object->getTotal();
    $items[] = $item;
}
// make posts into json and return json data
$scoresJSON = json_encode($items);
echo $scoresJSON;
?>

