<?php
Class Pokemon{
    //Atributos
    private $nombre;
    private $tipo;
    private $idPokeDex;
    private $peso;
    private $altura;

   // private $ataques = array(); //primer array declarado sin añadir al constructor, solo getter
    private $ataques = array();
    
    public function __construct($nombre, $tipo, $idPokeDex, $peso, $altura, $ataques) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->idPokeDex = $idPokeDex;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->ataques = $ataques;
        

    } 
    public function getNombre(){
        return $this->nombre;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function getAtaques(){
        return $this->ataques;
    }
  /*  function adAtaque(Ataque $a){
        $this->ataques[] = $a;

    }*/
    function adAtaque(Ataque $a):void{
        $this->ataques[] = $a;

    }
    public function mostrarAtaques() {
        foreach ($this->ataques as $ataque) {
            echo"Pokemon: " . $this->nombre . "\n". $ataque->__toString();
        }
    }
    
    
    public function __toString(){
        return "Pokemon:". $this->getNombre() . "\tTipo:" . $this->getTipo() . "\n";
    }

}
?>