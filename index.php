<!-- create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
include_once __DIR__ . '/models/Movie.php';


$avatar = new Movie("Avatar", "Action", "162");
var_dump($avatar);


$spiderman = new Movie("Spider-Man: No Way Home", "Action", "148");
var_dump($spiderman);

?>