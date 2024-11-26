<?php
require_once("./class/Ataque.php");
require_once("./class/Player.php");
require_once("./class/Magia.php");
require_once("./class/Defesa.php");
require_once("./class/Item.php");
require_once("./class/Inventario.php");

$item1= new Item('Livro',2,'magia');
$item6= new Item('Amuleto',2,'magia');
$item2= new Item('Espada',7,'ataque');
$item3= new Item('Lança',7,'ataque');
$item4= new Item('Espada',7,'ataque');
$item5= new Item('Armadura',4,'defesa');

//Player1
$inventario1= new Inventario(15);
$player1 = new Player('Bob',7,$inventario1);
echo "NickName: {$player1->getNickName()}.<br> Nivel: {$player1->getNivel()}. <br>Seu invetario Iniciou com: {$inventario1->getCapacidadeMaximo()}";
$player1->SubirNivel();
$player1->coletarItem($item1);
$player1->coletarItem($item4);
$inventario1->capacidadeLivre();
$player1->soltarItem('Livro');
$inventario1->capacidadeLivre();
echo '<hr>';
//Player2
$inventario2= new Inventario(15);
$player2 = new Player('Lord',15,$inventario2);
echo "NickName: {$player2->getNickName()}.<br> Nivel: {$player2->getNivel()}. <br>Seu invetario Iniciou com: {$inventario2->getCapacidadeMaximo()}";
$player2->coletarItem($item1);
$player2->coletarItem($item2);
$player2->coletarItem($item3);
$player2->coletarItem($item4);
$inventario2->capacidadeLivre();
$player2->soltarItem('Armadura');
