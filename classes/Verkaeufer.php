<?php
class Verkaeufer
{

    protected $vorname;
    protected $nachname;

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    

    public function getVorname()
    {
        return $this->vorname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }


    public function __construct($vorname, $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }
}
