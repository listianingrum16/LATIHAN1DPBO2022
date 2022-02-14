class TimBola():

    # deklarasi atribut
	__namaTim = ""  
	__negaraAsal = ""
	__tahunBerdiri = 0
	__namaPemain = ""

    # constructor
	def __init__(self, namaTim = "", negaraAsal = "", tahunBerdiri = 0, namaPemain = ""):
		self.__namaTim = namaTim
		self.__negaraAsal = negaraAsal
		self.__tahunBerdiri = tahunBerdiri
		self.__namaPemain = namaPemain
	
    # method set & get nama tim
	def setNamaTim(self, namaTim):
		self.__namaTim = namaTim
	def getNamaTim(self):
		return self.__namaTim
		
    # method set & get negara asal
	def setNegaraAsal(self, negaraAsal):
		self.__negaraAsal = negaraAsal
	def getNegaraAsal(self):
		return self.__negaraAsal
		
    # method set & get tahun berdiri
	def setTahunBerdiri(self, tahunBerdiri):
		self.__tahunBerdiri = tahunBerdiri
	def getTahunBerdiri(self):
		return self.__tahunBerdiri
		
    # method set & get nama pemain
	def setNamaPemain(self, namaPemain):
		self.__namaPemain = namaPemain
	def getNamaPemain(self):
		return self.__namaPemain
