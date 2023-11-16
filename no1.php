<?php

// Kelas dasar atau induk
class Hewan {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function bersuara() {
        echo "Hewan bersuara." . PHP_EOL;
    }
}

// Kelas turunan atau anak
class Kucing extends Hewan {
    public function __construct($nama) {
        parent::__construct($nama);
    }

    public function bersuara() {
        echo $this->nama . " mengeluarkan suara: Meow!" . PHP_EOL;
    }
}

// Kelas turunan lainnya
class Anjing extends Hewan {
    public function __construct($nama) {
        parent::__construct($nama);
    }

    public function bersuara() {
        echo $this->nama . " mengeluarkan suara: Woof!" . PHP_EOL;
    }
}

// Membuat objek dari kelas turunan
$kucing = new Kucing("Whiskers");
$anjing = new Anjing("Buddy");

// Memanggil metode dari kelas turunan
$kucing->bersuara();
$anjing->bersuara();
?>