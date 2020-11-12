<?php

class Kalkulator{

public $broj1;
public $broj2;
public $operator;

function __construct($b1,$b2,$opr)
{
    $this->broj1=$b1;
    $this->broj2=$b2;
    $this->operator=$opr;
}

function izracunaj(){
    switch($this->operator){
        case "plus": return $this->broj1+$this->broj2;
        break;
        case "minus": return $this->broj1-$this->broj2;
        break;
        case "puta": return $this->broj1*$this->broj2;
        break;
        case "podeljeno": return $this->broj1/$this->broj2;
        break;
        }
    }
}

$broj1=$_GET['broj1'];
$broj2=$_GET['broj2'];
$operator=$_GET['operator'];

$kalkulator = new Kalkulator($broj1,$broj2,$operator);

echo $kalkulator->izracunaj();





?>