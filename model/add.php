<?php
//common.php since connectionmanager is witihin model
require_once "../common.php";
$data = json_decode(file_get_contents("php://input"),true);

// var_dump($highscore,$HSname);
//Data passed by axios
$name = $data["name"];
if ($name){
    $rlgl = $data["rlgl"];
    $tow = $data["tow"];
    $marble = $data["marble"];
    $glass = $data["glass"];
    $total = $data["total"];
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();
    
    
    $sql = "INSERT INTO sotongLeaderboard (name, rlgl, tow, marble, glass, total) VALUES (:name, :rlgl, :tow, :marble, :glass, :total)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(":name", $name, PDO::PARAM_STR);
    $stmt->bindParam(":rlgl", $rlgl, PDO::PARAM_INT);
    $stmt->bindParam(":tow", $tow, PDO::PARAM_STR);
    $stmt->bindParam(":marble", $marble, PDO::PARAM_INT);
    $stmt->bindParam(":glass", $glass, PDO::PARAM_INT);
    $stmt->bindParam(":total", $total, PDO::PARAM_STR);
    
    $stmt->execute();
    
    $stmt = null;
    $conn = null;
}
else{
    echo "Name and Score not recorded!";
}

// Now to establish a database connection and write this to my DB

?>
