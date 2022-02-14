<?php

include "Tim.php";

// menggunakan contructor
$Persib = new Tim("Persib Bandung", "Indonesia", "1933", ["Febri Hariyadi"]);

// menggunakan setter
$Juventus = new Tim();
$Juventus->setNama("Juventus F.C.");
$Juventus->setAsalNegara("Italia");
$Juventus->setTahunBerdiri("1897");
$Juventus->setPemain(["Wojciech Szczesny", "Juan Cuadrado", "Adrien Rabiot"]);
$Juventus->addPemain("Denis Zakaria");

$Persib->printOut();
echo "<br/>";
$Juventus->printOut();
