<?php
require_once "Verkaeufer.php";

class Fahrrad {

    protected $farbe=null;
    protected $marke;
    protected Verkaeufer $verkaeufer;
    

    public function setVerkaeuferVorname($vorname){
       $this->verkaeufer->setVorname($vorname);
    }
    
    public function setVerkaeuferNachname($nachname){
        $this->verkaeufer->setNachname($nachname);
     }

    public function setFarbe($farbe){
        $this->farbe = $farbe;
    }

    public function getFarbe(){
        return $this->farbe ;
    }

    public function setMarke($marke){
        $this->marke = $marke;
    }

    public function getMarke(){
        return $this->marke ;
    }

    public function __construct($farbe, $marke,$vorname,$nachname) {
        $this->setFarbe($farbe);   //$this->farbe = $farbe;
        $this->setMarke($marke);   //$this->$marke = $marke;

        $this->verkaeufer=new Verkaeufer($vorname,$nachname);

    }

    public function __toString() {

        return "Farbe: ".$this->getFarbe()."<br>"."Marke: ".$this->getMarke();
    }
}