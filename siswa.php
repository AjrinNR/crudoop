<?php  
    class Siswa extends Database{
        //menampilkan semua data
        public function index(){
            $datasiswa = mysqli_query($this->koneksi, "select * from siswa");
            //var_dump($datasiswa);
            return $datasiswa;
        }
        
        //menambah data
        public function create($nis,$nama,$alamat){
            mysqli_query($this->koneksi, "insert into siswa values('','$nis','$nama','$alamat')");
        }
        // menampilkan data berdasarkan id
        public function show($id){
            $datasiswa = mysqli_query($this->koneksi, "select * from siswa where id ='$id'");
        }
        // menampilkan data berdasarkan id
        public function edit($id){
            $datasiswa = mysqli_query($this->koneksi, "select * from siswa where id ='$id'");
            return $datasiswa;
        }
        // mengupdate data berdasarkan id
        public function update($id,$nama, $nis, $alamat){
            mysqli_query($this->koneksi,"update siswa set nis='$nis', nama = '$nama', alamat = '$alamat' where id ='$id'");
        }
        public function delete($id){
            mysqli_query($this->koneksi,"delete from siswa where id = '$id'");
        }
    }
?>