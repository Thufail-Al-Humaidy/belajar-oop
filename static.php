<?php
class Buku
{
    public static $nama;
    public static $jumlah = 0;

    public static function set_nama($nama){
        self::$nama = $nama;
    }

    public static function get_nama()
    {
        self::$jumlah++;
        return "Buku " . self::$nama . " telah terjual sebanyak " . self::$jumlah . " kali.";
    }

}

buku::set_nama("hujan");
echo buku::get_nama();
echo "<br>";
echo buku::get_nama();
echo "<br>";
echo buku::get_nama();
echo "<br>";

class Bukulagi
{
    public $nama;
    public $jumlah;

    public function set_nama($nama)
    {
        $this->nama = $nama;
    }
    public function set_jumlah($jumlah)
    {
        $this->jumlah = $jumlah;
    }

    public function get_nama()
    {
        $this->jumlah++;
        return "Buku " . $this->nama . " telah terjual sebanyak " . $this->jumlah . " kali.";
    }
}
echo "<hr>";
$bumi = new Bukulagi();
$bumi->set_nama("bumi");
echo $bumi->get_nama();
echo "<br>";
$pulang = new Bukulagi();
$pulang->set_nama("pulang");
echo $pulang->get_nama();
echo "<br>";
?>
