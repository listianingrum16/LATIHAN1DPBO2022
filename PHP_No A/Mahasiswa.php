<?php

class Mahasiswa
{
	// deklarasi atribut
	private $nim = 0;
	private $nama = "";
	private $jenisKelamin = "";
	private $prodi = "";
	private $semester = 0;
		
	// constructor
	public function __construct($nim = 0, $nama = "", $jenisKelamin = "", $prodi = "", $semester = 0){
		$this -> nim = $nim;
		$this -> nama = $nama;
		$this -> jenisKelamin = $jenisKelamin;
		$this -> prodi = $prodi;
		$this -> semester = $semester;
	}
		
	// method set & get nim 
	public function setNim($nim){
		$this -> nim = $nim;
	}
	public function getNim(){
		return $this -> nim;
	}
	
	// method set & get nama 
	public function setNama($nama){
		$this -> nama = $nama;
	}
	public function getNama(){
		return $this -> nama;
	}
	
	// method set & get jenis kelamin
	public function setJenisKelamin($jenisKelamin){
		$this -> jenisKelamin = $jenisKelamin;
	}
	public function getJenisKelamin(){
		return $this -> jenisKelamin;
	}
		
	// method set & get program studi
	public function setProdi($prodi){
		$this -> prodi = $prodi;
	}
	public function getProdi(){
		return $this -> prodi;
	}
		
	// method set & get semester 
	public function setSemester($semester){
		$this -> semester = $semester;
	}
	public function getSemester(){
		return $this -> semester;
	}
}
	
?>
