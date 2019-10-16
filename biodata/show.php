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
            $id = $_data['id'];
            $nama = $_data['nama'];
            $alamat = $_data['alamat'];
            $tgl_lahir = $_data['tgl_lahir'];
            $jk = $_data['jk'];
            $agama = $_data['agama'];
            $umur = $_data['umur'];
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
                            <input type="radio" name = "jk" value = "<?php echo $jk;?>"readonly>Laki - Laki
                            <input type="radio" name="jk" value = "<?php echo $jk;?>"readonly>Perempuan
                        </div>
                        <div class = "form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="" value = "<?php echo $agama;?>" readonly class ="form-control">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class = "form-group">
                            <label for="">Umur</label>
                            <input type="number" name = "umur" value = "<?php echo $umur; ?>" readonly class ="form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>
