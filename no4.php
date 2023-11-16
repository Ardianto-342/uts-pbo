#include <iostream>
#include <stdexcept>

int main() {
    try {
        int pembilang, penyebut, hasil;

        std::cout << "Masukkan pembilang: ";
        std::cin >> pembilang;

        std::cout << "Masukkan penyebut: ";
        std::cin >> penyebut;

        if (penyebut == 0) {
            throw std::runtime_error("Error: Pembagian dengan nol tidak diizinkan.");
        }

        hasil = pembilang / penyebut;

        std::cout << "Hasil pembagian: " << hasil << std::endl;
    } catch (const std::exception& e) {
        std::cerr << "Exception: " << e.what() << std::endl;
    }

    return 0;
}