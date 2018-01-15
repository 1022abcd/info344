<?php
    class Player {
        public $name = "";
        public $gp = "";
        public $team = "";
        public $ppg = "";
        public $ptm3 = "";
        public $reb = "";
        public $ast = "";


        public function __construct($name, $gp, $team, $ppg, $ptm3, $reb, $ast) {
            $this -> name = $name;
            $this -> gp = $gp;
            $this -> team = $team;
            $this -> ppg = $ppg;
            $this -> ptm3 = $ptm3;
            $this -> reb = $reb;
            $this -> ast = $ast;
        }

        public function getInfo() {
            return "<div> name is" . $this-> name . $this -> team . "</div>";
            // ." ".$this->$team." ".$this->$gp." ".$this->min." ".$this->$mfg." ".$this->$afg
            // ." ".$this->$pctfg." ".$this->$m3pt." ".$this->$a3pt." ".$this->$pct3pt." ".$this->$mft." ".$this->$aft." "
            // .$this->$pctft." ".$this->$offrb." ".$this->$defrb." ".$this->$totrb." ".$this->$ast." ".$this->$to." "
            // .$this->$stl." ".$this->$blk." ".$this->$pf." ".$this->$ppg." /n";
        }
    }  

?>
