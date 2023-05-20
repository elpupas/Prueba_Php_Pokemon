<?php
class Ataque
{
    //Atributes
    //Atributos
    private $nombreAtaque;

    private $poder;
    private $tipoAtaque;
    //Construct
    //Constructor
    public function __construct($nombreAtaque, $poder, $tipoAtaque)
    {
        $this->nombreAtaque = $nombreAtaque;
        $this->poder = $poder;
        $this->tipoAtaque = $tipoAtaque;
    }
    //Getter
    public function getnombreAtaque()
    {
        return $this->nombreAtaque;
    }

    public function getPoder(){
        return $this->poder;
    }
    //Method toString
    public function __toString(){
        return "nombreAtaque del ataque:".  $this->nombreAtaque . "\nPoder:" . $this->poder . "\n";
    }
    

    
}
