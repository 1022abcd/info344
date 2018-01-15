
<?php

    echo levenshtein('secx', "sangchul");
    $username = 'info344user';
    $password = '<password>';

    try {
        $conn = new PDO('mysql:host=acho2dbinstance.cmlvjggv28ym.us-west-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        
        
        if (isset($_GET['playerName'])) {
            $input = $_GET['playerName'];
            $stmt = $conn->prepare("SELECT * FROM NBAPlayerList WHERE Name LIKE '%$input%'");
            $stmt->execute();
            $playerList = $stmt->fetchAll();
            include 'nbaPlayer.php';
            foreach($playerList as $eachPlayer) {
                $player = new Player($eachPlayer[0], $eachPlayer[2], $eachPlayer[1], $eachPlayer[21], $eachPlayer[7], $eachPlayer[15], $eachPlayer[16]);
                echo $player -> getInfo();
            }
        }
        
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

?>
