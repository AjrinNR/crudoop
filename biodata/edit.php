<?php 
include '../database2.php';
$bio = new Biodata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata CRUD - Edit Data</title>
    <link rel="stylesheet" href="/biodata/assets/css/bootstrap.min.css">
</head>
<body>
    <?php 
        foreach($bio->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jk = $data['jk'];
            $agama = $data['agama'];
            $umur = $data['umur'];
        }
    ?>
    <fieldset>
        <div class = "container">
            <div class = "col-md-12">
                <div class = "card">
                    <div class = "card-header"><legend>Edit Data Siswa</legend></div>
                    <div class = "card-body">
                        <form action="proses.php?aksi=update" method="post">
                            <div class = "form-group">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">                    
                                <label for="">Nama</label> 
                                <input type="text" name="nama" value="<?php echo $nama; ?>"required class = "form-control"><br>
                                <label for="">Alamat</label>
                                <textarea name="alamat" cols="20" rows="5" class = "form-control"><?php echo $alamat; ?></textarea><br>
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value = "<?php echo $tgl_lahir; ?>"class = "form-control"><br>
                                <label for="">Jenis Kelamin</label>
                                    <?php 
                                        if ($jk == "Laki - Laki") {?>
                                    <input type="radio" name = "jk" value = "Laki - Laki" checked>Laki Laki
                                    <input type="radio" name="jk" value = "Perempuan">Perempuan   
                                    <?php }else { ?>
                                    <input type="radio" name = "jk" value = "Laki - Laki">Laki Laki
                                    <input type="radio" name="jk" value = "Perempuan" checked>Perempuan
                                  <?php }
                                    ?> 
                                    <br> 
                                <label for="">Agama</label>
                                <select name="agama" id="" value = "<?php echo $agama ;?>" class = "form-control">
                                        <?php if ($agama == "Islam") { ?>
                                            <option value="Islam"selected>Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                        <?php } elseif ($agama == "Kristen") { ?>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen"selected>Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                        <?php } elseif ($agama == "Buddha") { ?>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha"selected>Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                        <?php } else { ?>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu"selected>Hindu</option>
                                        <?php }?>
                                        </select><br>
                                <Label>Umur</Label>
                                <input type="number" name="umur" value = "<?php echo $umur;?>" class = "form-control">
                            </div>
                            <input type="submit" name="save" value="Simpan" class = "btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</body>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>