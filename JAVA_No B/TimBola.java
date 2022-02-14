public class TimBola
{
	// deklarasi atribut
	private String namaTim;
	private String negaraAsal;
	private int tahunBerdiri;
	private String namaPemain;
		
	// constructor
	public TimBola(String namaTim, String negaraAsal, int tahunBerdiri, String namaPemain){
		this.namaTim = namaTim;
		this.negaraAsal = negaraAsal;
		this.tahunBerdiri = tahunBerdiri;
		this.namaPemain = namaPemain;
	}
	public TimBola(){}
		
	// method set & get nama tim
	public void setNamaTim(String namaTim){
		this.namaTim = namaTim;
	}
	public String getNamaTim(){
		return namaTim;
	}
		
	// method set & get negara asal
	public void setNegaraAsal(String negaraAsal){
		this.negaraAsal = negaraAsal;
	}
	public String getNegaraAsal(){
		return negaraAsal;
	}
		
	// method set & get tahun berdiri
	public void setTahunBerdiri(int tahunBerdiri){
		this.tahunBerdiri = tahunBerdiri;
	}
	public int getTahunBerdiri(){
		return tahunBerdiri;
	}
		
	// method set & get nama pemain
	public void setNamaPemain(String namaPemain){
		this.namaPemain = namaPemain;
	}
	public String getNamaPemain(){
		return namaPemain;
	}
}
