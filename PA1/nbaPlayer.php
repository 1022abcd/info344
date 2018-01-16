<?php
    class Player {
        public $name = "";
        public $fName = "";
        public $lName = "";
        public $gp = "";
        public $team = "";
        public $ppg = "";
        public $ptm3 = "";
        public $reb = "";
        public $ast = "";
        public $min = "";
        public $to = "";
        public $stl = "";
        public $blk = "";
        public $pf = "";

        public function __construct($name, $fName, $lName, $gp, $team, $ppg, $ptm3, 
        $reb, $ast, $min, $to, $stl, $blk, $pf) {
            $this -> name = $name;
            $this -> fName = $fName;
            $this -> lName = $lName;
            $this -> gp = $gp;
            $this -> team = $team;
            $this -> ppg = $ppg;
            $this -> ptm3 = $ptm3;
            $this -> reb = $reb;
            $this -> ast = $ast;
            $this -> min = $min;
            $this -> to = $to;
            $this -> stl = $stl;
            $this -> blk = $blk;
            $this -> pf = $pf;
        }

        public function getName() {
            return $this-> name;
        }

        public function getFname() {
            return $this-> fName;
        }

        public function getLname() {
            return $this -> lName;
        }
        public function getGP() {
            return  $this-> gp;
        }

        public function getTeam() {
            return $this-> team;
        }
        
        public function getPpg() {
            return $this-> ppg;
        }

        public function getPtm3() {
            return $this-> ptm3;
        }

        public function getReb() {
            return $this-> reb;
        }

        public function getAst() {
            return $this-> ast;
        }

        public function getMin() {
            return $this-> min;
        }

        public function getTo() {
            return $this-> to; 
        }

        public function getStl() {
            return $this-> stl;
        }

        public function getBlk() {
            return $this-> blk;
        }

        public function getPf() {
            return $this-> pf;
        }
        
        public function getImage() {
            return '<img src="https://nba-players.herokuapp.com/players/' . $this->getLname() . '/' . $this->getFname() . '" />';
        }
        public function getHighlights() {
            return '<a href="https://youtube.com/results?search_query='.$this->getFname().'+'.$this->getLname().'+highlights"> 
                    *Watch Highlights</a>';
        }
    }  
?>

