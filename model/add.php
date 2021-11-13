<?php
//common.php since connectionmanager is witihin model
require_once "common.php";
$data = json_decode(file_get_contents("php://input"),true);

// var_dump($highscore,$HSname);
$gameName =  "Red Light Green Light";
//Data passed by axios 
if(isset($highscore) && isset($name)){
    $highscore = $data['Highscore'];
$HSname = $data['playerName'];
    echo $highscore, $name;
}
else{
    //error
    $error = "Name and Score not recorded!";
    echo $error;
}

// Now to establish a database connection and write this to my DB
$connMgr = new ConnectionManager();
$conn = $connMgr->getConnection();


$sql = "INSERT INTO highscores (name, score, game) VALUES (:HSname, :highscore, :gameName)";
        $stmt = $conn->prepare($sql);
 
        $stmt->bindParam(":HSname", $HSname, PDO::PARAM_STR);
        $stmt->bindParam(":highscore", $highscore, PDO::PARAM_INT);
        $stmt->bindParam(":gameName",$gameName, PDO::PARAM_STR);

$result = $stmt->execute();

$stmt = null;
$conn = null;

return $result;

?>
