<?php
class Team
{
    private $nombreEquipo;
    private $pokemons;
    private $victorias;
    private $derrotas;

    public function __construct($nombreEquipo)
    {
        $this->nombreEquipo = $nombreEquipo;
        $this->pokemons = array();
        $this->victorias = 0;
        $this->derrotas = 0;
    }

    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }

    public function adTeams(Pokemon $pk)
    {
        $this->pokemons[] = $pk;
    }
    public function showPokemons()
    {
        echo "POKEMONS\n";
        foreach ($this->pokemons as $pk) {
            echo "Equipo: " . $this->nombreEquipo . "\n" . $pk->__toString();
        }
    }
    function buscaTipoPokemon($tipo): void
    {

        $pos = -1;
        $i = 0;
        $concidencias = 0;
        echo "Buscando Pokemon de tipo:" . $tipo . " en la base de datos\n";
        while ($i < count($this->pokemons)) {
            if (strcasecmp($this->pokemons[$i]->getTipo(), $tipo) === 0) {
                $pos = $i;
                ++$concidencias;
                echo "Hemos encontrado:" . $concidencias . " concidencias\n";
                if ($pos < 0) {
                    echo "no existe este tipo de pokemon en su pokedex";
                } else {

                    echo "Pokemon:" . $this->pokemons[$pos]->getnombrePokemon() . "\nTipo:" . $this->pokemons[$pos]->getTipo() . "\n";
                }
            }
            $i++;
        }
    }


}
