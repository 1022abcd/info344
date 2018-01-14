<?php
    class Player {
        public $name = "";
        public $team = "";
        public $gp = "";
        public $min = "";
        public $mfg = "";
        public $afg = "";
        public $pctfg = "";
        public $m3pt = "";
        public $a3pt = "";
        public $pct3pt = "";
        public $mft = "";
        public $aft = "";
        public $pctft = "";
        public $offrb = "";
        public $defrb = "";
        public $totrb = "";
        public $ast = "";
        public $to = "";
        public $stl = "";
        public $blk = "";
        public $pf = "";
        public $ppg = "";

        public function __construct($name, $team, $gp, $min, $mfg, $afg, $pctfg, $m3pt, $a3pt, $pct3pt, $mft, $aft,
        $pctft, $offrb, $defrb, $totrb, $ast, $to, $stl, $blk, $pf, $ppg) {
            $this -> name = $name;
            $this -> team = $team;
            $this -> gp = $gp;
            $this -> min = $min;
            $this -> mfg = $mfg;
            $this -> afg = $afg;
            $this -> pctfg = $pctfg;
            $this -> m3pt = $m3pt;
            $this -> a3pt = $a3pt;
            $this -> pct3pt = $pct3pt;
            $this -> mft = $mft;
            $this -> aft = $aft;
            $this -> pctft = $pctft;
            $this -> offrb = $offrb;
            $this -> defrb = $defrb;
            $this -> totrb = $totrb;
            $this -> ast = $ast;
            $this -> to = $to;
            $this -> stl = $stl;
            $this -> blk = $blk;
            $this -> pf = $pf;
            $this -> ppg = $ppg;
        }
        public function getInfo() {
            return $this->$name." ".$this->$team." ".$this->$gp." ".$this->min." ".$this->$mfg." ".$this->$afg
            ." ".$this->$pctfg." ".$this->$m3pt." ".$this->$a3pt." ".$this->$pct3pt." ".$this->$mft." ".$this->$aft." "
            .$this->$pctft." ".$this->$offrb." ".$this->$defrb." ".$this->$totrb." ".$this->$ast." ".$this->$to." "
            .$this->$stl." ".$this->$blk." ".$this->$pf." ".$this->$ppg." /n";
        }
    }
    
    // function listOfSearchingPlayers($inputFromUser) {
    //     $username = 'info344user';
    //     $password = '<password>';

    //     try {
    //         $conn = new PDO('mysql:host=acho2dbinstance.cmlvjggv28ym.us-west-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
    //         $temp = $conn->prepare('SELECT NAME FROM NBAPlayerList');
    //         $temp-> execute();
    //         $playerNameArray= array();
    //         while($row = $temp->fetch()) {
    //             $split = explode(" ", $row[0]);
    //             array_push($playerNameArray, $split[0]);
    //             array_push($playerNameArray, $split[1]);
    //         }

    //         // if(isset($_GET['playerName'])) {
    //             // $input = $_GET['playerName'];
    //             $input = $inputFromUser;
    //             $closest = "";
    //             $shortest = -1;
    //             foreach($playerNameArray as $playerName) {
    //                 $lev = levenshtein($input, $playerName);
    //                 if($lev == 0) {
    //                     $closest = $playerName;
    //                     $shortest = 0;
    //                     break;
    //                 }
    //                 if ($lev <= $shortest || $shortest < 0) {
    //                     // set the closest match, and shortest distance
    //                     $closest  = $playerName;
    //                     $shortest = $lev;
    //                 }
    //             }


    //             $stmt = $conn->prepare("SELECT * FROM NBAPlayerList WHERE Name LIKE '%$input%' or Name LIKE '%$closest%'");
    //             //$stmt->bind_param("s", $_GET['playerName']);
    //             $stmt->execute();
    //             $players = $stmt->fetchAll();
    //             $playersResult = array();
                
    //             include 'nbaPlayer.php';
    //             foreach($players as $player) {
    //                 $eachPlayer = new Player($player[0], $player[1], $player[2], $player[3], $player[4],
    //                 $player[5], $player[6], $player[7], $player[8], $player[9], $player[10], $player[11], $player[12],
    //                 $player[13], $player[14], $player[15], $player[16], $player[17], $player[18], $player[19], $player[20],
    //                 $player[21]);
    //                 array_push($playersResult, $eachPlayer);
    //             }
    //             print_r(array_values($playersResult));
    //             //return $playersResult;
    //         }
            
    //     } catch(PDOException $e) {
    //         echo 'ERROR: ' . $e->getMessage();
    //     }
    // }


?>
