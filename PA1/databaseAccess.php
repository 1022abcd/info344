
<?php
    function returnList(){
        $username = 'info344user';
        $password = '<password>';

        try {
            $conn = new PDO('mysql:host=acho2dbinstance.cmlvjggv28ym.us-west-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            $temp = $conn->prepare('SELECT NAME FROM NBAPlayerList');
            $temp-> execute();
            $playerNameArray= array();
            while($row = $temp->fetch()) {
                $split = explode(" ", $row[0]);
                array_push($playerNameArray, $split[0]);
                array_push($playerNameArray, $split[1]);
            }

            if(isset($_GET['playerName'])) {
                $input = $_GET['playerName'];
                $closest = "";
                $shortest = -1;
                foreach($playerNameArray as $playerName) {
                    $lev = levenshtein($input, $playerName);
                    if($lev == 0) {
                        $closest = $playerName;
                        $shortest = 0;
                        break;
                    }
                    if ($lev <= $shortest || $shortest < 0) {
                        // set the closest match, and shortest distance
                        $closest  = $playerName;
                        $shortest = $lev;
                    }
                }


                $stmt = $conn->prepare("SELECT * FROM NBAPlayerList WHERE Name LIKE '%$input%' or Name LIKE '%$closest%'");
                //$stmt->bind_param("s", $_GET['playerName']);
                $stmt->execute();
                $players = $stmt->fetchAll();
                $playersResult = array();
                //print_r(array_values($players));
                include 'nbaPlayer.php';
                // foreach($players as $player) {
                //     print_r($player);
                // }

                foreach($players as $player) {
                    $eachPlayer = new Player($player[0], $player[1], $player[2], $player[3], $player[4],
                    $player[5], $player[6], $player[7], $player[8], $player[9], $player[10], $player[11], $player[12],
                    $player[13], $player[14], $player[15], $player[16], $player[17], $player[18], $player[19], $player[20],
                    $player[21]);
                    array_push($playersResult, $eachPlayer);
                }
                //print_r(array_values($playersResult));
                //return $playersResult;
            }
            
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
?>
