<?php
Class Pokemon{
    //Atributos
    private $nombre;
    private $tipo;
    private $idPokeDex;
    private $peso;
    private $altura;

    private $ataques = array(); //primer array declarado sin añadir al constructor, solo getter
    private $ataques2 = array();
    
    public function __construct($nombre, $tipo, $idPokeDex, $peso, $altura, $ataques2) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->idPokeDex = $idPokeDex;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->ataques2 = $ataques2;
        

    } 
    public function getNombre(){
        return $this->nombre;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function getAtaques2(){
        return $this->ataques2;
    }
    function adAtaque(Ataque $a){
        $this->ataques[] = $a;

    }
    function adAtaque2(Ataque $a):void{
        $this->ataques2[] = $a;

    }
    public function mostrarAtaques() {
        foreach ($this->ataques2 as $ataque) {
            echo $ataque->getNombre();
        }
    }
    
    
    public function __toString(){
        return "Pokemon:". $this->getNombre() . "\tTipo:" . $this->getTipo() . "\n" . "Ataques" . $this->getAtaques2();
    }

}
?>