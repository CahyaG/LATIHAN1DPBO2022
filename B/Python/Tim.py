class Tim():
    __nama = ""
    __asalNegara = ""
    __tahunBerdiri = ""
    __pemain = []

    # constructor
    def __init__(self, nama = "", asalNegara = "", tahunBerdiri = "", pemain  = []):
        self.__nama = nama
        self.__asalNegara = asalNegara
        self.__tahunBerdiri = tahunBerdiri
        self.__pemain = pemain

    # setter and getter method
    def setNama(self, nama):
        self.__nama = nama

    def getNama(self):
        return self.__nama
    
    def setAsalNegara(self, asalNegara):
        self.__asalNegara = asalNegara
    
    def getAsalNegara(self):
        return self.__asalNegara

    def setTahunBerdiri(self, tahunBerdiri):
        self.__tahunBerdiri = tahunBerdiri
    
    def getTahunBerdiri(self):
        return self.__tahunBerdiri

    def setPemain(self, pemain):
        self.__pemain = pemain
    
    def getPemain(self):
        return self.__pemain

    def addPemain(self, pemain):
        self.__pemain.append(pemain)

    # output
    def printTim(self):
        print("Nama Tim         : " + str(self.__nama))
        print("Asal Negara      : " + str(self.__asalNegara))
        print("Tahun Berdiri    : " + str(self.__tahunBerdiri))
        print("Pemain           : ")
        for i in self.getPemain():
            print("- " + i)