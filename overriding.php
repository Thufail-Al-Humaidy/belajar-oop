<?php

// Class Buku
class Transportasi
{
    public $nama;
    public $brand;

    public function __construct($nama, $brand)
    {
        $this->nama = $nama;
        $this->brand = $brand;
    }

    public function stop()
    {
        return "Transportasi dengan nama " . $this->nama . " Telah berhenti";
    }

    // public function run() {
    //     $str = "Transportasi dengan nama " . $this->nama . ", brand: " . $this->brand . ", Telah berjalan ";
    //     if ($this->sizejok != "") {
    //         $str .= "dengan jok " . $this->sizejok;
    //     } else if ($this->jumlah_pintu != 0 ) {
    //         $str .= "dan memiliki " . $this->jumlah_pintu . "pintu";
    //     }
    //     return $str;
    // }
}

class mobil extends Transportasi
{
    public $jumlah_pintu;
    public function __construct($nama, $brand, $jumlah_pintu)
    {
        parent::__construct($nama, $brand);
        $this->jumlah_pintu = $jumlah_pintu;
    }
    public function run()
    {
        $str = "mobil dengan nama " . $this->nama . ", brand: " . $this->brand . ", Telah berjalan dan memiliki " . $this->jumlah_pintu . " pintu";
        return $str;
    }
}
class motor extends Transportasi
{
    public $sizejok;
    public function __construct($nama, $brand, $sizejok)
    {
        parent::__construct($nama, $brand);
        $this->sizejok = $sizejok;
    }
    public function run()
    {
        $str = "motor dengan nama " . $this->nama . ", brand: " . $this->brand . ", Telah berjalan dengan size jok " . $this->sizejok;
        return $str;
    }
}
class pesawat extends Transportasi
{
    public $ketinggian;
    public function __construct($nama, $brand, $ketinggian)
    {
        parent::__construct($nama, $brand,);
        $this->ketinggian = $ketinggian;
    }
    public function run()
    {
        $str = "pesawat dengan nama " . $this->nama . ", brand: " . $this->brand . ", Telah terbang dengan ketinggian " . $this->ketinggian . " mdpl";
        return $str;
    }
}

// Membuat objek dari setiap class
$motor = new motor("Supra", "honda", "30cm");
$mobil = new mobil("Ayla", "Honda", 4,);
$pesawat = new pesawat("Garuda", "mbuhhhh", 10000);

// Menampilkan runrmasi buku dan majalah
echo $motor->run();
echo "<br>";
echo $mobil->run();
echo "<br>";
echo $pesawat->run();
echo "<br>";
echo $pesawat->stop();
echo "<br>";

// contoh problam lain
// class Publikasi {
//     public $judul;
//     public $penulisEditor; // Menyimpan penulis untuk buku dan editor untuk majalah
//     public $tahunTerbit; // Tahun terbit untuk buku dan bulan terbit untuk majalah
//     public $jenis; // Menyimpan jenis: 'buku' atau 'majalah'

//     public function __construct($judul, $penulisEditor, $tahunTerbit, $jenis) {
//         $this->judul = $judul;
//         $this->penulisEditor = $penulisEditor;
//         $this->tahunTerbit = $tahunTerbit;
//         $this->jenis = $jenis;
//     }
//     public function run() {
//         // Menggunakan if-else untuk menentukan runrmasi berdasarkan jenis
//         if ($this->jenis === 'buku') {
//             return "Buku: " . $this->judul . ", Penulis: " . $this->penulisEditor . ", Tahun Terbit: " . $this->tahunTerbit;
//         } elseif ($this->jenis === 'majalah') {
//             return "Majalah: " . $this->judul . ", Editor: " . $this->penulisEditor . ", Bulan Terbit: " . $this->tahunTerbit;
//         } else {
//             return "Tipe publikasi tidak dikenali.";
//         }
//     }
// }
// // Membuat objek publikasi
// $publikasi1 = new Publikasi("Belajar PHP", "John Doe", 2020, "buku");
// $publikasi2 = new Publikasi("Teknologi Masa Depan", "Jane Smith", "Januari", "majalah");
// // Menampilkan runrmasi publikasi
// echo $publikasi1->run();
// echo "<br>";
// echo $publikasi2->run();
