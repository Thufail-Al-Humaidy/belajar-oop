<?php

// Class Mobil
class Mobil
{
    // Properti
    public $merek;
    public $model;
    public $warna;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    public function __construct($merek, $model, $warna)
    {
        $this->merek = $merek;
        $this->model = $model;
        $this->warna = $warna;
    }

    // Method untuk menampilkan informasi mobil
    public function info()
    {
        return "Ini adalah mobil " . $this->merek . " model " . $this->model . " dengan warna " . $this->warna . ".";
    }
}

// Class Motor
class Motor
{
    // Properti
    public $merek;
    public $model;
    public $warna;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    public function __construct($merek, $model, $warna)
    {
        $this->merek = $merek;
        $this->model = $model;
        $this->warna = $warna;
    }

    // Method untuk menampilkan informasi motor
    public function info()
    {
        return "Ini adalah motor " . $this->merek . " model " . $this->model . " dengan warna " . $this->warna . ".";
    }
}

// Class Mekanik
class Mekanik
{
    // Method untuk memperbaiki motor
    public function perbaiki(Motor $motor)
    {
        // Mengambil informasi dari objek Motor
        $str = "Sedang memperbaiki motor " . $motor->merek . " model " . $motor->model . " dengan warna " . $motor->warna . ".";
        return $str;
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Corolla", "Merah");
$mobil2 = new Mobil("Honda", "Civic", "Hitam");

// Menampilkan informasi mobil
echo $mobil1->info();
echo "<br>";
echo $mobil2->info();
echo "<br>";

// Membuat objek dari class Motor
$motor1 = new Motor("Yamaha", "Nmax", "Biru");

// Membuat objek dari class Mekanik dan memanggil method perbaiki
$mekanik = new Mekanik();
echo $mekanik->perbaiki($motor1);
echo "<br>";
echo "<br>";


// object type versi makanan

// Class Makanan
class Makanan
{
    // Properti
    public $nama;
    public $jenis;
    public $rasa;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    public function __construct($nama, $jenis, $rasa)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->rasa = $rasa;
    }

    // Method untuk menampilkan informasi makanan
    public function info()
    {
        return "Ini adalah " . $this->nama . " ini untuk " . $this->jenis . " dengan toping " . $this->rasa . ".";
    }
}

// Class Koki
class Koki
{
    // Method untuk menyiapkan makanan
    public function siapkanMakanan(Makanan $makanan)
    {
        $str = "Koki sedang menyiapkan " . $makanan->nama . " dengan toping " . $makanan->rasa . ".";
        return $str;
    }
}

// Membuat objek dari class Makanan
$makanan1 = new Makanan("Nasi Goreng", "makanan utama", "udang");
$makanan2 = new Makanan("Es Krim", "makanan penutup", "durian");

// Menampilkan informasi makanan
echo $makanan1->info();
echo "<br>";
echo $makanan2->info();
echo "<br>";

// Membuat objek dari class Koki dan memanggil method siapkanMakanan
$koki = new Koki();
echo $koki->siapkanMakanan($makanan1);
echo "<br>";
echo $koki->siapkanMakanan($makanan2);

?>
