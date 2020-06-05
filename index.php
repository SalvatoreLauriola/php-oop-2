<!-- Crea e modellizza classi per gestire i prodotti di magazzino
Come fatto in classe questa mattina creare una classe generale e poi creare altre classi che estendono questa classe generale
Come fatto nell’esercizio di ieri poi eseguite degli output istanziando oggetti delle varie classi -->


<?php

include_once __DIR__ . '/classes/details.php';
include_once __DIR__ . '/classes/products.php';

$prod1 = new details ('Nokia', 'Smartphone', '2005', '120', '0629', 'red', '0.10' );

var_dump ($prod1);