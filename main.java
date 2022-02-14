import java.util.*;

public class main
{
	public static void main(String[] args)
	{
		// instansiasi menggunakan setter 
		TimBola dataTim1 = new TimBola();
		dataTim1.setNamaTim("Barcelona");
		dataTim1.setNegaraAsal("Spanyol");
		dataTim1.setTahunBerdiri(1899);
		dataTim1.setNamaPemain("Lionel Messi, Luis Suarez, Gerard Pique");
		
		// instansiasi menggunakan constructor
		TimBola dataTim2 = new TimBola("Real Madrid", "Spanyol", 1902, "Cristiano Ronaldo, Sergio Ramos, Pepe");
		TimBola dataTim3 = new TimBola("Chelsea", "Inggris", 1905, "Jorginho, Kepa Arrizabalaga, Mason Mount");
		
		// ambil nilai menggunakan getter untuk output
		System.out.println("==================== DAFTAR TIM SEPAKBOLA ====================");
		System.out.println("Tim 1");
		System.out.println("- Nama Tim : " + dataTim1.getNamaTim());
		System.out.println("- Negara Asal : " + dataTim1.getNegaraAsal());
		System.out.println("- Tahun Berdiri : " + dataTim1.getTahunBerdiri());
		System.out.println("- Nama Pemain : " + dataTim1.getNamaPemain());
		System.out.println("=============================================");
		System.out.println("Tim 2");
		System.out.println("- Nama Tim : " + dataTim2.getNamaTim());
		System.out.println("- Negara Asal : " + dataTim2.getNegaraAsal());
		System.out.println("- Tahun Berdiri : " + dataTim2.getTahunBerdiri());
		System.out.println("- Nama Pemain : " + dataTim2.getNamaPemain());
		System.out.println("=============================================");
		System.out.println("Tim 3");
		System.out.println("- Nama Tim : " + dataTim3.getNamaTim());
		System.out.println("- Negara Asal : " + dataTim3.getNegaraAsal());
		System.out.println("- Tahun Berdiri : " + dataTim3.getTahunBerdiri());
		System.out.println("- Nama Pemain : " + dataTim3.getNamaPemain());
	}
}