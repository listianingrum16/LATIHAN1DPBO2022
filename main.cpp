#include "TimBola.cpp"

int main( )
{
	// instansiasi menggunakan setter 
	TimBola dataTim1 ;
	dataTim1.setNamaTim("Barcelona");
	dataTim1.setNegaraAsal("Spanyol");
	dataTim1.setTahunBerdiri(1899);
	dataTim1.setNamaPemain("Lionel Messi, Luis Suarez, Gerard Pique");
	
	// instansiasi menggunakan constructor 
	TimBola dataTim2("Real Madrid", "Spanyol", 1902, "Cristiano Ronaldo, Sergio Ramos, Pepe");
	TimBola dataTim3("Chelsea", "Inggris", 1905, "Jorginho, Kepa Arrizabalaga, Mason Mount");
		
	// ambil nilai menggunakan getter untuk output 
	cout << "==================== DAFTAR TIM SEPAKBOLA ====================" << endl;
	cout << "Tim 1" << endl;
	cout << "- Nama Tim : " << dataTim1.getNamaTim() << endl;
	cout << "- Negara Asal : " << dataTim1.getNegaraAsal() << endl;
	cout << "- Tahun Berdiri : " << dataTim1.getTahunBerdiri() << endl;
	cout << "- Nama Pemain : " << dataTim1.getNamaPemain() << endl;
	cout << "=============================================" << endl;
	cout << "Tim 2" << endl;
	cout << "- Nama Tim : " << dataTim2.getNamaTim() << endl;
	cout << "- Negara Asal : " << dataTim2.getNegaraAsal() << endl;
	cout << "- Tahun Berdiri : " << dataTim2.getTahunBerdiri() << endl;
	cout << "- Nama Pemain : " << dataTim2.getNamaPemain() << endl;
	cout << "=============================================" << endl;
	cout << "Tim 3" << endl;
	cout << "- Nama Tim : " << dataTim3.getNamaTim() << endl;
	cout << "- Negara Asal : " << dataTim3.getNegaraAsal() << endl;
	cout << "- Tahun Berdiri : " << dataTim3.getTahunBerdiri() << endl;
	cout << "- Nama Pemain : " << dataTim3.getNamaPemain() << endl;
	
	return 0;
}