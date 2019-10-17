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
    <title>Latihan CRUD - Show Data</title>
    <link rel="stylesheet" href="/biodata/assets/css/bootstrap.min.css">
</head>
<body>
    <?php 
        foreach($bio->show($_GET['id']) as $data)
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
    <div class = "container">
        <div class = "col-md-12">
            <div class = "card">
                <div class = "card-header"><legend>Show Biodata</legend></div>
                <div class = "card-body">
                    <form action="proses.php?aksi=tambah" method="post">
                        <input type="hidden" name="id" value = "<?php echo $id; ?>"> 
                        <div class = "form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" value="<?php echo $nama; ?>" readonly class = "form-control">
                        </div>
                        <div class = "form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" cols="40" readonly class ="form-control"><?php echo $alamat; ?></textarea>
                        </div>
                        <div class = "form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value = "<?php echo $tgl_lahir;?>"readonly class ="form-control">   
                        </div>
                        <div class = "form-group">
                            <label for="">Jenis Kelamin</label>
                                <?php 
                                    if ($jk == "Laki - Laki") {?>
                                        <input type="radio" name = "jk" value = "Laki - Laki" checked>Laki Laki
                                        <input type="radio" name="jk" value = "Perempuan" disabled>Perempuan   
                                <?php }else { ?>
                                        <input type="radio" name = "jk" value = "Laki - Laki" disabled>Laki Laki
                                        <input type="radio" name="jk" value = "Perempuan" checked>Perempuan
                                <?php } ?>
                        </div>
                        <div class = "form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="" value = "<?php echo $agama;?>" readonly class ="form-control">
                                <?php if ($agama == "Islam") { ?>
                                        <option value="Islam"selected>Islam</option>
                                        <option value="Kristen" disabled>Kristen</option>
                                        <option value="Buddha"disabled>Buddha</option>
                                        <option value="Hindu"disabled>Hindu</option>
                                <?php } elseif ($agama == "Kristen") { ?>
                                    <option value="Islam"disabled>Islam</option>
                                    <option value="Kristen"selected>Kristen</option>
                                    <option value="Buddha"disabled>Buddha</option>
                                    <option value="Hindu"disabled>Hindu</option>
                                <?php } elseif ($agama == "Buddha") { ?>
                                    <option value="Islam"disabled>Islam</option>
                                    <option value="Kristen"disabled>Kristen</option>
                                    <option value="Buddha"selected>Buddha</option>
                                    <option value="Hindu"disabled>Hindu</option>
                                <?php } else { ?>
                                    <option value="Islam"disabled>Islam</option>
                                    <option value="Kristen"disabled>Kristen</option>
                                    <option value="Buddha"disabled>Buddha</option>
                                    <option value="Hindu"selected>Hindu</option>
                                <?php }?>
                            </select>
                        </div>
                        <div class = "form-group">
                            <label for="">Umur</label>
                            <input type="number" name = "umur" value = "<?php echo $umur; ?>" readonly class ="form-control">
                        </div>
                        <button class = "btn btn-outline-danger"><a href="index.php" style = "text-decoration: none ; color: black">Back</a></button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>
