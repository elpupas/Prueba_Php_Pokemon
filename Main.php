<?php
include_once("Clases/Pokemon.php");
include_once("Clases/Ataque.php");
//Creando objetos de clase Pokemon,
//Pikachu
$pikachuAtaque1 = new Ataque("Impactrueno", 80, "trueno"); //objeto clase Ataque
$pikachu = new Pokemon("Pikachu", "electrico", 1, 30, 0.4, [$pikachuAtaque1]);
$charmanderAtaque1 = new Ataque("Llamarada", 90, "Fuego");
$charmander = new Pokemon("Charmander", "Fuego", 2, 35, 0.7, [$charmanderAtaque1]);
$onixAtaque1= new Ataque("Terremoto", 60, "Roca");
$onix = new Pokemon("Onix", "Piedra", 1, 30, 0.4, [$onixAtaque1]);
$castle = new Pokemon("Castle", "Fantasma", 1, 30, 0.4, ["Asustar", "Placaje", "Hipnosis", "Super trueno"]);
//array de pokemons
$pokemons = array();
$pokemons = [$pikachu, $charmander, $onix, $castle];
$pikachu->adAtaque2($pikachuAtaque1);
print_r($pikachu->getAtaques2());

//Creando objetos ataques

$pikachu->mostrarAtaques() . "\n";
$charmander->mostrarAtaques();
$tipo = "Fuego";

$index = mostrarTipoPokemon($tipo);
if ($index < 0) {
    echo "no existe este tipo de pokemon en su pokedex";
} else {
    echo"pokemon:". $pokemons[$index]->getNombre() . "\nTipo:". $pokemons[$index]->getTipo();
}

function mostrarTipoPokemon($tipo)
{
    global $pokemons;
    $pos = -1;
    $i = 0;
    while ($i < count($pokemons)) {
        if (strcasecmp($pokemons[$i]->getTipo(), $tipo) === 0) {
            $pos = $i;
            return $pos;
        }
        $i++;
    }
    return $pos;
}


