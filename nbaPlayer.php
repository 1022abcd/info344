<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>player</title>
</head>
<body>
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
            public function GetName(){
                return 'The title of the player is $'.$this->name;
                echo"\n";
            }

            public function GetPrice(){
                return 'The price is '.$this->price;
                echo"\n";
            }
            
            public static function getAllplayers() {

                $player1 = new Player("Allen Cho", "KsubLeague",1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
                $playerArray = array($player1);
                return $playerArray;
            }
        }

    ?>
</body>
</html>