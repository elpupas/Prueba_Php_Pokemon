<?php
include_once("Clases/Pokemon.php");
include_once("Clases/Ataque.php");


//instacia de clase Pokemon

//Instance of the Atack class
//Instancia de clase Ataque
//Pikachu
$pikachuAtaque1 = new Ataque("Impactrueno", 80, "trueno"); 
$pikachuAtaque2 = new Ataque("Placaje", 35, "Normal");
$pikachuAtaque3 = new Ataque("Impactrueno", 80, "trueno");
$pikachuAtaque4 = new Ataque("Cola de Hierro", 70, "acero");

//Charmander
$charmanderAtaque1 = new Ataque("Llamarada", 90, "Fuego");
$charmanderAtaque2 = new Ataque("Placaje", 90, "Fuego");
$charmanderAtaque3 = new Ataque("Garra Metal", 75, "Acero");
$charmanderAtaque4 = new Ataque("Giro Fuego", 60, "Fuego");
//Onix
$onixAtaque1 = new Ataque("Terremoto", 60, "Roca");
$onixAtaque2 = new Ataque("Cola Dragón", 80, "Dragón");
$onixAtaque3 = new Ataque("Demolición", 50, "Normal");
$onixAtaque4 = new Ataque("Cabeza de Hierro", 75, "Acero");
//Castle

$castleAtaque1 = new Ataque("Lanzallamas", 80, "Fuego");
$castleAtaque2 = new Ataque("Hidrobomba", 90, "Agua");
$castleAtaque3 = new Ataque("Rayo Hielo", 75, "Hielo");
$castleAtaque4 = new Ataque("Psíquico", 70, "Psíquico");
//instacia de la clase Pokemon
//Instance of the Pokemon class
//Pikachu
$pikachu = new Pokemon("Pikachu", "electrico", 1, 30, 0.4, [$pikachuAtaque1, $pikachuAtaque2, $pikachuAtaque3, $pikachuAtaque4]);
//Charmander
$charmander = new Pokemon("Charmander", "Fuego", 2, 35, 0.7, [$charmanderAtaque1, $charmanderAtaque2, $charmanderAtaque3, $charmanderAtaque4]);
//Onix
$onix = new Pokemon("Onix", "Piedra", 1, 30, 0.4, [$onixAtaque1, $onixAtaque2, $onixAtaque3, $onixAtaque4]);
//Castle
$castle = new Pokemon("Castle", "Fantasma", 1, 30, 0.4, [$castleAtaque1, $castleAtaque2, $castleAtaque3, $castleAtaque4]);

//Creando Array de objetos de clase Pokemon
$pokemons = array();
//Añadiendo objetos Pokemon al array
$pokemons = [$pikachu, $charmander, $onix, $castle];
$pikachu->adAtaque($pikachuAtaque1);
//Shows Atacks
//Mostrando Ataques
$pikachu->mostrarAtaques();
$charmander->mostrarAtaques();
$castle->mostrarAtaques();
$onix->mostrarAtaques();

//Search Pokemon by type
//Buscando Pokemon por tipo
$tipo = "Fuego";
buscaTipoPokemon($tipo);


function buscaTipoPokemon($tipo):void
{
    global $pokemons;
    $pos = -1;
    $i = 0;
    $concidencias = 0;
    echo "Buscando Pokemon de tipo:" . $tipo . " en la base de datos\n";
    while ($i < count($pokemons)) {
        if (strcasecmp($pokemons[$i]->getTipo(), $tipo) === 0) {
            $pos = $i;
           ++$concidencias;
           echo "Hemos encontrado:" . $concidencias . " concidencias\n"; 
            if ($pos < 0) {
                echo "no existe este tipo de pokemon en su pokedex";
            } else {
                
                echo "Pokemon:" . $pokemons[$pos]->getNombre() . "\nTipo:" . $pokemons[$pos]->getTipo(). "\n";
            }
        }
            $i++;
        }    
}
