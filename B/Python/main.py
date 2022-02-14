from Tim import Tim

# menggunakan constructor
Persib = Tim("Persib Bandung", "Indonesia", "1933", ["Febri Hariyadi"])

# menggunakan setter
Juventus = Tim()
Juventus.setNama("Juventus F.C.")
Juventus.setAsalNegara("Italia")
Juventus.setTahunBerdiri("1897")
Juventus.setPemain(["Wojciech Szczesny", "Juan Cuadrado", "Adrien Rabiot"])
Juventus.addPemain("Denis Zakaria")

Persib.printTim()
print("")
Juventus.printTim()