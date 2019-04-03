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
        return "".$this->imie." ".$this->nazwisko;
    }

    function __construct( $id, $imie, $nazwisko ) {
        $this->id = $id;
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
    }
}


function pobierzPacjentow(){
    //$pacjenci = array(new Pacjent(1,"Michał","Baran"));
    //$pacjenci = array(new Pacjent(2,"Andrzej","Nowak"));
    //$pacjenci = array(array(new Pacjent(1,"Michał","Baran")),array(new Pacjent(2,"Andrzej","Nowak")));
    //$pacjenci[0] = array(new Pacjent(1,"Michał","Baran"));
    //$pacjenci[1] = array(new Pacjent(2,"Andrzej","Nowak"));
   
    $pacjenci = array(   
    [0] -> new Pacjent
        (
            [id] => 1;
            [imie] => "Michał";
            [nazwisko] => "Baran";
        )
    [1] -> new Pacjent
        (
            [id] => 2;
            [imie] => "Andrzej";
            [nazwisko] => "Nowak";
        )
)
    return $pacjenci;
}


?>