<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="nba.com.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</head>
<body>
    <?php
        $username = 'info344user';
        $password = '<password>';
        try {
            $conn = new PDO('mysql:host=acho2dbinstance.cmlvjggv28ym.us-west-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

            $temp = $conn->prepare('SELECT Name FROM NBAPlayerList');
            $temp-> execute();
            $playerNameArray= array();
            while($row = $temp->fetch()) {
                array_push($playerNameArray, $row[0]);             
            }
            if (isset($_GET['playerName'])) {
                $input = $_GET['playerName'];
                
                $stmt = $conn->prepare("SELECT * FROM NBAPlayerList WHERE Name LIKE '%$input%' OR levenshtein('Name', '$input') <= 4");
                    //"SELECT * FROM NBAPlayerList WHERE Name LIKE '%$input%' OR levenshtein('%$input%', 'Name') <= 4");
                $stmt->execute();
                $playerList = $stmt->fetchAll();
                
                include 'nbaPlayer.php';
                foreach($playerList as $eachPlayer) {
                    $split = explode(" ", $eachPlayer[0]);
                    $player = new Player($eachPlayer[0], $split[0], $split[1], $eachPlayer[2], $eachPlayer[1], $eachPlayer[21], $eachPlayer[7], $eachPlayer[15], $eachPlayer[16]
                                        , $eachPlayer[3], $eachPlayer[17], $eachPlayer[18], $eachPlayer[19], $eachPlayer[20]);
                    echo 
                    
                    '<div class="col s12 m7">'.
                        '<div class="card horizontal">'.
                            '<div class="card-image">'.
                                $player->getImage().
                            '</div>'.
                            '<div class="card-action">'.
                                '<div id="getName">'.$player -> getName().'<span id="hyperlink">'.$player-> getHighlights().'</span></div>'.

                                "<div id='getTeam'><b>Team:</b> <span>".$player-> getTeam(). "</span></div>".
                                '<div class="content">'.
                                    '<ul id="row">'.
                                        '<li><div class="chip"> GP   :   '.$player -> getGp().'</div>/<li>'.
                                        '<li><div class="chip"> PPG  :   '.$player -> getPpg().'</div>/<li>'.
                                        '<li><div class="chip"> 3PTM :   '.$player -> getPtm3().'</div>/<li>'.
                                        '<li><div class="chip"> REB  :   '.$player -> getReb().'</div>/<li>'.
                                        '<li><div class="chip"> AST  :   '.$player -> getAst().'</div>/<li>'.
                                    '</ul>'.
                                    '<ul>'.
                                        '<li><div class="chip"> MIN   :   '.$player -> getMin().'</div>/<li>'.
                                        '<li><div class="chip"> TO  :   '.$player -> getTo().'</div>/<li>'.
                                        '<li><div class="chip"> STL :   '.$player -> getStl().'</div>/<li>'.
                                        '<li><div class="chip"> BLK  :   '.$player -> getBlk().'</div>/<li>'.
                                        '<li><div class="chip"> PF  :   '.$player -> getPf().'</div>/<li>'.
                                    '</ul>'.
                                '</div>'.
                            '</div>'.
                            '<div class="card-stacked">'.
                                '<div class="card-content">'.

                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</div>';
                }
                
            } 
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    ?>
</body>
</html>
