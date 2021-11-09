<?php

require_once 'common.php';

class HighscoreDAO {
    public function getAll() {
    // STEP 1
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    // STEP 2
    $sql = "SELECT *

            FROM highscores"; // SELECT * FROM highscores; 
    $stmt = $conn->prepare($sql);

      // STEP 3
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);

 // STEP 4
 $scores = []; // Indexed Array of Post objects
 while( $row = $stmt->fetch() ) {
     $scores[] =
         new Highscore(
             $row['id'],
             $row['name'],
             $row['score'],
             $row['game']
);
 }

 // STEP 5
 $stmt = null;
 $conn = null;

 // STEP 6
 return $scores;
}
}
