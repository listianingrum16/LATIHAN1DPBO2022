<?php
	
include "TimBola.php";
	
	// instansiasi menggunakan setter 
	$dataTim1 = new TimBola();
	$dataTim1 -> setNamaTim("Barcelona");
	$dataTim1 -> setNegaraAsal("Spanyol");
	$dataTim1 -> setTahunBerdiri(1899);
	$dataTim1 -> setNamaPemain("Lionel Messi, Luis Suarez, Gerard Pique");
	
	// instansiasi menggunakan constructor
	$dataTim2 = new TimBola("Real Madrid", "Spanyol", 1902, "Cristiano Ronaldo, Sergio Ramos, Pepe");
	$dataTim3 = new TimBola("Chelsea", "Inggris", 1905, "Jorginho, Kepa Arrizabalaga, Mason Mount");
	
	// ambil nilai menggunakan getter untuk output 
	echo "<center><h2>DAFTAR TIM SEPAKBOLA</h2></center>";
	echo "<h3>Tim 1</h3>";
	echo "- Nama Tim : ". $dataTim1 -> getNamaTim(). "<br>";
	echo "- Negara Asal : ". $dataTim1 -> getNegaraAsal(). "<br>";
	echo "- Tahun Berdiri : ". $dataTim1 -> getTahunBerdiri(). "<br>";
	echo "- Nama Pemain : ". $dataTim1 -> getNamaPemain(). "<br>";
	echo "<h3>Tim 2</h3>";
	echo "- Nama Tim : ". $dataTim2 -> getNamaTim(). "<br>";
	echo "- Negara Asal : ". $dataTim2 -> getNegaraAsal(). "<br>";
	echo "- Tahun Berdiri : ". $dataTim2 -> getTahunBerdiri(). "<br>";
	echo "- Nama Pemain : ". $dataTim2 -> getNamaPemain(). "<br>";
	echo "<h3>Tim 3</h3>";
	echo "- Nama Tim : ". $dataTim3 -> getNamaTim(). "<br>";
	echo "- Negara Asal : ". $dataTim3 -> getNegaraAsal(). "<br>";
	echo "- Tahun Berdiri : ". $dataTim3 -> getTahunBerdiri(). "<br>";
	echo "- Nama Pemain : ". $dataTim3 -> getNamaPemain(). "<br>";

?>
