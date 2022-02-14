from TimBola import TimBola

# instansiasi menggunakan setter 
dataTim1 = TimBola()
dataTim1.setNamaTim("Barcelona")
dataTim1.setNegaraAsal("Spanyol")
dataTim1.setTahunBerdiri(1899)
dataTim1.setNamaPemain("Lionel Messi, Luis Suarez, Gerard Pique")

# instansiasi menggunakan constructor
dataTim2 = TimBola("Real Madrid", "Spanyol", 1902, "Cristiano Ronaldo, Sergio Ramos, Pepe")
dataTim3 = TimBola("Chelsea", "Inggris", 1905, "Jorginho, Kepa Arrizabalaga, Mason Mount")

# ambil nilai menggunakan getter untuk output 
print("==================== DAFTAR TIM SEPAKBOLA ====================")
print("Tim 1")
print("- Nama Tim : " + str(dataTim1.getNamaTim()))
print("- Negara Asal : " + str(dataTim1.getNegaraAsal()))
print("- Tahun Berdiri : " + str(dataTim1.getTahunBerdiri()))
print("- Nama Pemain : " + str(dataTim1.getNamaPemain()))
print("==================================================")
print("Tim 2")
print("- Nama Tim : " + str(dataTim2.getNamaTim()))
print("- Negara Asal : " + str(dataTim2.getNegaraAsal()))
print("- Tahun Berdiri : " + str(dataTim2.getTahunBerdiri()))
print("- Nama Pemain : " + str(dataTim2.getNamaPemain()))
print("==================================================")
print("Tim 3")
print("- Nama Tim : " + str(dataTim3.getNamaTim()))
print("- Negara Asal : " + str(dataTim3.getNegaraAsal()))
print("- Tahun Berdiri : " + str(dataTim3.getTahunBerdiri()))
print("- Nama Pemain : " + str(dataTim3.getNamaPemain()))
