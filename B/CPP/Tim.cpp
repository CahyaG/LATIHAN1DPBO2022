#include <string>
#include <iostream>
#include <vector>

using namespace std;

class Tim
{
private:
    string nama;
    string asalNegara;
    string tahunBerdiri;
    vector<string> pemain;

public:
    // constructor
    Tim() {}

    Tim(string nama, string asalNegara, string tahunBerdiri, vector<string> pemain)
    {
        this->nama = nama;
        this->asalNegara = asalNegara;
        this->tahunBerdiri = tahunBerdiri;
        this->pemain.insert(this->pemain.begin(), pemain.begin(), pemain.end());
    }

    // setter and getter
    void setNama(string nama)
    {
        this->nama = nama;
    }

    string getNama()
    {
        return this->nama;
    }

    void setAsalNegara(string asalNegara)
    {
        this->asalNegara = asalNegara;
    }

    string getAsalNegara()
    {
        return this->asalNegara;
    }

    void setTahunBerdiri(string tahunBerdiri)
    {
        this->tahunBerdiri = tahunBerdiri;
    }

    string getTahunBerdiri()
    {
        return this->tahunBerdiri;
    }

    void setPemain(vector<string> pemain)
    {
        this->pemain.insert(this->pemain.begin(), pemain.begin(), pemain.end());
    }

    vector<string> getPemain()
    {
        return this->pemain;
    }

    void addPemain(string pemain)
    {
        this->pemain.push_back(pemain);
    }

    // output
    void printTim()
    {
        cout << "Nama Tim       : " << this->getNama() << endl;
        cout << "Asal Negara    : " << this->getAsalNegara() << endl;
        cout << "Tahun Berdiri  : " << this->getTahunBerdiri() << endl;
        cout << "Pemain         : " << endl;
        for (auto const &c : this->getPemain())
        {
            cout << "-" + c << endl;
        }
    }

    ~Tim() {}
};