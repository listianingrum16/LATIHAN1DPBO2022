#include <iostream>
#include <string>
using namespace std;

class TimBola 
{
	// deklarasi atribut 
	private:
		string namaTim;
		string negaraAsal;
		int tahunBerdiri ;
		string namaPemain;

	// constructor 
	public:
	TimBola(){
		this -> namaTim = "";
		this -> negaraAsal = "";
		this -> tahunBerdiri = 0;
		this -> namaPemain = "";
	}
	TimBola(string namaTim, string negaraAsal, int tahunBerdiri, string namaPemain){
		this -> namaTim = namaTim;
		this -> negaraAsal = negaraAsal;
		this -> tahunBerdiri = tahunBerdiri;
		this -> namaPemain = namaPemain;
	}
		
	// method set & get nama tim
	void setNamaTim(string namaTim){
		this -> namaTim = namaTim;
	}
	string getNamaTim( ){
		return this -> namaTim;
	}
		
	// method set & get negara asal
	void setNegaraAsal(string negaraAsal){
		this -> negaraAsal = negaraAsal;
	}
	string getNegaraAsal(){
		return this -> negaraAsal;
	}
		
	// method set & get tahun berdiri
	void setTahunBerdiri(int tahunBerdiri){
		this -> tahunBerdiri = tahunBerdiri;
	}
	int getTahunBerdiri(){
		return this -> tahunBerdiri;
	}
		
	// method set & get nama pemain
	void setNamaPemain(string namaPemain){
		this -> namaPemain = namaPemain;
	}
	string getNamaPemain(){
		return this -> namaPemain;
	}

	// destructor 
	~TimBola(){}
};