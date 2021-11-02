<?php
//connection manager page
require_once './ConnectionManager.php';

$data = json_decode(file_get_contents("php://input"), TRUE);
$highscore = $data['Highscore'];
$HSname = $data['playerName'];
//Data passed by axios 
if(isset($highscore) && isset($name)){
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


$sql = "INSERT INTO score (name, score) VALUES (:HSname, :highscore)";
        $stmt = $conn->prepare($sql);
 
        $stmt->bindParam(":HSname", $HSname, PDO::PARAM_STR);
        $stmt->bindParam(":highscore", $highscore, PDO::PARAM_INT);


$result = $stmt->execute();


$stmt = null;
$conn = null;


return $result;


?>
