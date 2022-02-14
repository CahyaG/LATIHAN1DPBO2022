#include <string>
#include <iostream>
#include "Tim.cpp"

using namespace std;

int main(int argc, char const *argv[])
{
    // menggunakan constructor
    Tim Persib("Persib Bandung", "Indonesia", "1933", {"Febri Hariyadi"});

    // menggunakan setter
    Tim Juventus;
    Juventus.setNama("Juventus F.C.");
    Juventus.setAsalNegara("Italia");
    Juventus.setTahunBerdiri("1897");
    vector<string> pemain = {"Wojciech Szczesny", "Juan Cuadrado", "Adrien Rabiot"};
    // setter pemain
    Juventus.setPemain(pemain);
    // menambah pemain baru tanpa menghapus pemain lama
    Juventus.addPemain("Denis Zakaria");

    Persib.printTim();
    cout << endl;
    Juventus.printTim();

    return 0;
}
