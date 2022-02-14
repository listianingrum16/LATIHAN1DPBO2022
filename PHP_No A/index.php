<?php
 
include "Mahasiswa.php";
	
	// instansiasi menggunakan setter
	$dataMahasiswa1 = new Mahasiswa();
	$dataMahasiswa1 -> setNim(19010203);
	$dataMahasiswa1 -> setNama("Nerissa Qiana");
	$dataMahasiswa1 -> setJenisKelamin("Perempuan");
	$dataMahasiswa1 -> setProdi("Sastra Indonesia");
	$dataMahasiswa1 -> setSemester(6);
	
	// instansiasi menggunakan constructor
	$dataMahasiswa2 = new Mahasiswa(20040506, "Abercio Emrick", "Laki-Laki", "Hukum", 4);
	$dataMahasiswa3 = new Mahasiswa(21070809, "Flora Indy", "Perempuan", "Psikologi", 2);
	
	// ambil nilai menggunakan getter untuk output
	echo "<center><h2>DATA MAHASISWA</h2></center>";
	echo "<h3>Mahasiswa 1</h3>";
	echo "- NIM : ". $dataMahasiswa1 -> getNim(). "<br>";
	echo "- Nama : ". $dataMahasiswa1 -> getNama(). "<br>";
	echo "- Jenis Kelamin : ". $dataMahasiswa1 -> getJenisKelamin(). "<br>";
	echo "- Program Studi : ". $dataMahasiswa1 -> getProdi(). "<br>";
	echo "- Semester : ". $dataMahasiswa1 -> getSemester(). "<br>";
	echo "<h3>Mahasiswa 2</h3>";
	echo "- NIM : ". $dataMahasiswa2 -> getNim(). "<br>";
	echo "- Nama : ". $dataMahasiswa2 -> getNama(). "<br>";
	echo "- Jenis Kelamin : ". $dataMahasiswa2 -> getJenisKelamin(). "<br>";
	echo "- Program Studi : ". $dataMahasiswa2 -> getProdi(). "<br>";
	echo "- Semester : ". $dataMahasiswa2 -> getSemester(). "<br>";
	echo "<h3>Mahasiswa 3</h3>";
	echo "- NIM : ". $dataMahasiswa3 -> getNim(). "<br>";
	echo "- Nama : ". $dataMahasiswa3 -> getNama(). "<br>";
	echo "- Jenis Kelamin : ". $dataMahasiswa3 -> getJenisKelamin(). "<br>";
	echo "- Program Studi : ". $dataMahasiswa3 -> getProdi(). "<br>";
	echo "- Semester : ". $dataMahasiswa3 -> getSemester(). "<br>";

?>
