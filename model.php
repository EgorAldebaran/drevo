<?php

class Model
{
    private $S;
    public $_total = null;

    public function __construct() {
        $this-> S = include_once('source.php');
        $this-> _total = $this-> _total();
    }

    public function total() {
        foreach ($this-> S as $s) {
            $this-> _total += $s;
        }
    }

    private function _total() {
        return $this-> _total;
    }
}
