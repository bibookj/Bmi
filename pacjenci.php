<?php
class Pacjent{
    var $imie;
    var $nazwisko;
    var $id;

    function getId(){
        return $this->id;
    }
    function getImie(){
        return $this->imie;
    }
    function getNazwisko(){
        return $this->nazwisko;
    }
    function getImieNazwisko(){
        return ""+$this->imie + " " + $this->nazwisko;
    }

    function __construct( $id, $imie, $nazwisko ) {
        $this->id = $id;
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
    }
}


function pobierzPacjentow(){
    $pacjenci = array(new Pacjent(1,"Michał","Baran"));
    return $pacjenci;
}


?>