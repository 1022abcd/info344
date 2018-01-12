<?php

    class NBAPlayer {
        public -> $name = "";
        public -> $team = "";
        public -> $gp = "";
        public -> $min = "";
        public -> $mfg = "";
        public -> $afg = "";
        public -> $pctfg = "";
        public -> $m3pt = "";
        public -> $a3pt = "";
        public -> $pct3pt = "";
        public -> $mft = "";
        public -> $aft = "";
        public -> $pctft = "";
        public -> $offrb = "";
        public -> $defrb = "";
        public -> $totrb = "";
        public -> $ast = "";
        public -> $to = "";
        public -> $stl = "";
        public -> $blk = "";
        public -> $pf = "";
        public -> $ppg = "";
    }

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

    public function getName() {
        return $this->name;
    }
?>