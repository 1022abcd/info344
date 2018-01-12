
 <?php
$username = 'info344user';
$password = '<password>';

try {
    $conn = new PDO('mysql:host=acho2dbinstance.cmlvjggv28ym.us-west-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    
    $temp = $conn->prepare('SELECT NAME FROM NBAPlayerList');
    $temp-> execute();
    $playerNameArray= array();
    while($row = $temp->fetch()) {
        array_push($playerNameArray, $row[0]);
    }
    //print_r(array_values($playerNameArray));

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


        $stmt = $conn->prepare("SELECT * FROM NBAPlayerList WHERE Name LIKE '%$closest%'");
        //$stmt->bind_param("s", $_GET['playerName']);
        $stmt->execute();

        while($row = $stmt->fetch()) {
            print_r($row);
        }
    }
    
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>