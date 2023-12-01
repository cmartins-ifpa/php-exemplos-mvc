<?php
class Calculadora {
    private $resp;
    public function soma($y, $z) {
        $resp = $y + $z; 
        return $resp;
    }

    public function sub($y, $z) {
        return $y - $z;
    }

    public function mult($y, $z) {
        return $y * $z;
    }

    public function div($y, $z) {
        return $y / $z;
    }

}
