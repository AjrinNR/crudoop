 <?php  
    class Biodata extends Databasee{
        //menampilkan semua data
        public function index(){
            $databio = mysqli_query($this->koneksi, "select * from biodata");
            //var_dump($datasiswa);
            return $databio;
        }
        
        //menambah data
        public function create($nama,$alamat,$tgl_lahir, $jk, $agama, $umur){
            mysqli_query($this->koneksi, "insert into biodata values(null,'$nama','$alamat','$tgl_lahir', '$jk',' $agama',' $umur')");
        }
        // menampilkan data berdasarkan id
        public function show($id){
            $databio = mysqli_query($this->koneksi, "select * from biodata where id ='$id'");
            return $databio;
        }
        // menampilkan data berdasarkan id
        public function edit($id){
            $databio = mysqli_query($this->koneksi, "select * from biodata where id ='$id'");
            return $databio;
        }
        // mengupdate data berdasarkan id
        public function update($id,$nama,$alamat,$tgl_lahir, $jk, $agama, $umur){
            mysqli_query($this->koneksi,"update biodata set nama='$nama', alamat = '$alamat', tgl_lahir = '$tgl_lahir', jk='$jk',agama='$agama', umur = '$umur' where id ='$id'");
        }
        public function delete($id){
            mysqli_query($this->koneksi,"delete from biodata where id = '$id'");
        }
    }
?>