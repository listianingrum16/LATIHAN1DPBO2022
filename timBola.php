<?php

class TimBola 
{
	// deklarasi atribut
	private $namaTim = "";
	private $negaraAsal = "";
	private $tahunBerdiri = 0;
	private $namaPemain = "";
		
	// constructor
	public function __construct($namaTim = "", $negaraAsal = "", $tahunBerdiri = 0, $namaPemain = ""){
		$this -> namaTim = $namaTim;
		$this -> negaraAsal = $negaraAsal;
		$this -> tahunBerdiri = $tahunBerdiri;
		$this -> namaPemain = $namaPemain;
	}
		
	// method set & get nama tim
	public function setNamaTim($namaTim){
		$this -> namaTim = $namaTim;
	}
	public function getNamaTim(){
		return $this -> namaTim;
	}
		
	// method set & get negara asal
	public function setNegaraAsal($negaraAsal){
		$this -> negaraAsal = $negaraAsal;
	}
	public function getNegaraAsal(){
		return $this -> negaraAsal;
	}
		
	// method set & get tahun berdiri
	public function setTahunBerdiri($tahunBerdiri){
		$this -> tahunBerdiri = $tahunBerdiri;
	}
	public function getTahunBerdiri(){
		return $this -> tahunBerdiri;
	}
		
	// method set & get nama pemain
	public function setNamaPemain($namaPemain){
		$this -> namaPemain = $namaPemain;
	}
	public function getNamaPemain(){
		return $this -> namaPemain;
	}
}

?>