<?php
class Ataque
{
    private $nombre;
    private $poder;
    private $tipoAtaque;
    public function __construct($nombre, $poder, $tipoAtaque)
    {
        $this->nombre = $nombre;
        $this->poder = $poder;
        $this->tipoAtaque = $tipoAtaque;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPoder(){
        return $this->poder;
    }

    public function __toString(){
        return "Nombre del ataque:".  $this->nombre . "\nPoder:" . $this->poder . "\n";
    }
    
}
