<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIODATA CRUD - Create Data</title>
    <link rel="stylesheet" href="/biodata/assets/css/bootstrap.min.css">
</head>
<body>
    <fieldset>
        <form action="proses.php?aksi=tambah" method = "post">
            <div class = "container">
            <div class = "row" style = "padding:10px">
                <div class = "col-md-12">
                <center><h2>Input Biodata</h2></center>
                    <div class = "card">
                        <div class ="card-header">Biodata Siswa</div>
                        <div class = "card-body">
                            <div class = "form-group">
                                <label for="">Nama</label> 
                                <input type="text" name="nama" required class = "form-control   ">
                            
                            </div>
                            <div class = "form-group">
                                <label for="">Alamat</label>
                                
                                <textarea name="alamat" id="" cols="20" rows="5" required class = "form-control"></textarea>
                            
                            </div>
                            <div class = "form-group">
                                <label for="">Tanggal Lahir</label>
                                
                                <input type="date" name="tgl_lahir" class = "form-control">
                            
                            </div>
                            <div class = "form-group">
                                <label for="">Jenis Kelamin</label>
                                
                                <input type="radio" name="jk" value = "Laki - Laki">Laki Laki
                                <input type="radio" name="jk" value = "Perempuan">Perempuan
                            
                            </div>
                            <div class = "form-group">
                            
                                <label for="">Agama</label>
                                <select name="agama" id="" class = "form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                </select>
                            
                            </div>
                                  <input type="submit" value="Simpan" name = "sbm" class = "btn btn-outline-success">
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>