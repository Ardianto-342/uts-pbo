#include <iostream>

// Kelas dasar dengan fungsi virtual
class Bentuk {
public:
    virtual void gambar() const {
        std::cout << "Gambar bentuk umum." << std::endl;
    }
};

// Kelas turunan dengan implementasi berbeda fungsi virtual
class Lingkaran : public Bentuk {
public:
    void gambar() const override {
        std::cout << "Gambar lingkaran." << std::endl;
    }
};

// Kelas turunan lainnya dengan implementasi berbeda fungsi virtual
class Persegi : public Bentuk {
public:
    void gambar() const override {
        std::cout << "Gambar persegi." << std::endl;
    }
};

// Fungsi yang menggunakan polymorphism
void gambarBentuk(const Bentuk& bentuk) {
    bentuk.gambar();
}

int main() {
    Lingkaran lingkaran;
    Persegi persegi;

    // Polymorphism pada runtime
    gambarBentuk(lingkaran);
    gambarBentuk(persegi);

    return 0;
}