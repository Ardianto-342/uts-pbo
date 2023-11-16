<?php

try {
    $pembilang = readline("Masukkan pembilang: ");
    $penyebut = readline("Masukkan penyebut: ");

    if ($penyebut == 0) {
        throw new RuntimeException("Error: Pembagian dengan nol tidak diizinkan.");
    }

    $hasil = $pembilang / $penyebut;

    echo "Hasil pembagian: " . $hasil . PHP_EOL;
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
}

?>
