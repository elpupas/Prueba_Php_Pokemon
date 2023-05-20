<?php
class Pokemon
{

    //Atributos
    private $nombrePokemon;
    private $tipo;
    private $idPokeDex;
    private $peso;
    private $altura;
    private $ataques = array();
    private $puntosdeVIda;
    //Construct

    public function __construct($nombrePokemon, $tipo, $idPokeDex, $peso, $altura, $ataques)
    {
        $this->nombrePokemon = $nombrePokemon;
        $this->tipo = $tipo;
        $this->idPokeDex = $idPokeDex;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->ataques = $ataques;
        
    }
    //Getter
    public function getnombrePokemon()
    {
        return $this->nombrePokemon;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function getAtaques()
    {
        return $this->ataques;
    }

    function adAtaque(Ataque $a): void
    {
        $this->ataques[] = $a;
    }
    //ToString
    public function __toString()
    {
        return "Pokemon:" . $this->getnombrePokemon() . "\tTipo:" . $this->getTipo() . "\n";
    }

    //Methods
    public function mostrarAtaques():void
    {
        foreach ($this->ataques as $ataque) {
            echo "Pokemon: " . $this->nombrePokemon . "\n" . $ataque->__toString();
        }
    }


}
