<?php 
    class Database{
        // $host = untuk memberitahu kita menggunakan server lokal yaitu localhost
        // $user = username dari localhost
        // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
        // $db = untuk memberi akses kita menggunakan database mana di server lokal kita(localhost)

        public $host = "localhost", $user = "root", $pass = 123, $db = "latihan";
        public $koneksi;
        public function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            if ($this->koneksi) {
                // echo"berhasil";
            }else {
                return "Koneksi Database Gagal";
            }
        }
    }
    include 'siswa.php';
    // koneksi DB
    $db = new Database();
?>