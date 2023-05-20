<?php
include_once("Clases/Pokemon.php");
include_once("Clases/Ataque.php");
include_once("Clases/Team.php");


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
//Team Pupa
$teampupa = new Team("Pupa");

//Team Rocket
// Instancias de la clase Ataque
// Pikachu
$pikachuAtaque1 = new Ataque("Impactrueno", 80, "Eléctrico");
$pikachuAtaque2 = new Ataque("Placaje", 35, "Normal");
$pikachuAtaque3 = new Ataque("Ataque Rápido", 40, "Normal");
$pikachuAtaque4 = new Ataque("Cola de Hierro", 70, "Acero");
// Charizard
$charizardAtaque1 = new Ataque("Lanzallamas", 90, "Fuego");
$charizardAtaque2 = new Ataque("Garra Dragón", 80, "Dragón");
$charizardAtaque3 = new Ataque("Vuelo", 70, "Volador");
$charizardAtaque4 = new Ataque("Giro Fuego", 60, "Fuego");
// Blastoise
$blastoiseAtaque1 = new Ataque("Hidrobomba", 90, "Agua");
$blastoiseAtaque2 = new Ataque("Hidropulso", 70, "Agua");
$blastoiseAtaque3 = new Ataque("Rayo Hielo", 75, "Hielo");
$blastoiseAtaque4 = new Ataque("Cabezazo Zen", 80, "Psíquico");
// Gengar
$gengarAtaque1 = new Ataque("Lengüetazo", 30, "Fantasma");
$gengarAtaque2 = new Ataque("Rayo Confuso", 50, "Eléctrico");
$gengarAtaque3 = new Ataque("Bola Sombra", 80, "Fantasma");
$gengarAtaque4 = new Ataque("Explosión", 250, "Normal");
// Instancias de la clase Pokemon
// Pikachu
$pikachu = new Pokemon("Pikachu", "Eléctrico", 1, 30, 0.4, [$pikachuAtaque1, $pikachuAtaque2, $pikachuAtaque3, $pikachuAtaque4]);
// Charizard
$charizard = new Pokemon("Charizard", "Fuego/Volador", 3, 65, 1.7, [$charizardAtaque1, $charizardAtaque2, $charizardAtaque3, $charizardAtaque4]);
// Blastoise
$blastoise = new Pokemon("Blastoise", "Agua", 2, 55, 1.6, [$blastoiseAtaque1, $blastoiseAtaque2, $blastoiseAtaque3, $blastoiseAtaque4]);
// Gengar
$gengar = new Pokemon("Gengar", "Fantasma/Veneno", 2, 45, 1.5, [$gengarAtaque1, $gengarAtaque2, $gengarAtaque3, $gengarAtaque4]);
// Instancia de la clase Team
$teamRocket = new Team("Rocket");
//Añadiendo objetos Pokemon al array
//$pokemons = [$pikachu, $charmander, $onix, $castle];
$teampupa->adTeams($pikachu);
$teampupa->adTeams($charmander);
$teampupa->adTeams($onix);
$teampupa->adTeams($castle);
$teampupa->showPokemons();

$teamRocket->adTeams($pikachu);
$teamRocket->adTeams($charizard);
$teamRocket->adTeams($blastoise);
$teamRocket->adTeams($gengar);
$teamRocket->showPokemons();

//simulando Battle


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
$teampupa->buscaTipoPokemon($tipo);
