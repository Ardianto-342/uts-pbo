#include <iostream>
#include <string>

// Kelas dengan enkapsulasi
class Mobil {
private:
    std::string merek;
    int tahunProduksi;

public:
    // Konstruktor
    Mobil(const std::string& _merek, int _tahunProduksi) : merek(_merek), tahunProduksi(_tahunProduksi) {}

    // Metode untuk mengakses data secara aman
    std::string getMerek() const {
        return merek;
    }

    int getTahunProduksi() const {
        return tahunProduksi;
    }

    // Metode untuk mengubah data secara aman
    void setMerek(const std::string& _merek) {
        merek = _merek;
    }

    void setTahunProduksi(int _tahunProduksi) {
        tahunProduksi = _tahunProduksi;
    }

    // Metode lainnya
    void info() const {
        std::cout << "Mobil " << merek << " tahun " << tahunProduksi << std::endl;
    }
};

int main() {
    // Membuat objek Mobil
    Mobil mobil("Toyota", 2020);

    // Mengakses dan mengubah data menggunakan metode
    mobil.setTahunProduksi(2022);
    mobil.info();

    return 0;
}