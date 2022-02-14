public class main {
    public static void main(String[] args) {
        // menggunakan constructor
        Tim Persib = new Tim("Persib Bandung", "Indonesia", "1933", new String[] { "Febri Hariyadi" });

        // menggunakan setter
        Tim Juventus = new Tim();
        Juventus.setNama("Manchester United");
        Juventus.setAsalNegara("Inggris");
        Juventus.setTahunBerdiri("1878");
        Juventus.setPemain(new String[] { "Wojciech Szczesny", "Juan Cuadrado", "Adrien Rabiot" });
        Juventus.addPemain("Denis Zakaria");

        Persib.printTim();
        System.out.println();
        Juventus.printTim();
    }
}