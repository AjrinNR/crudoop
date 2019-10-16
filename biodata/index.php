<?php 
// menambah / memanggil file database.php
include '../database2.php';
$db = new Databasee();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIODATA</title>
    <link rel="stylesheet" href="/biodata/assets/css/bootstrap.min.css">
</head>
<body>
<br>
    <table class = "table">
        <div class = "container-fluid">
            <div class = "card">
            <div class = "card-header bg-dark">
                <h2 style = "color: white"><center>Biodata</center></h2>
            
                <tr>
            </div>
                    <div class="container">
                        <div class="row">
                           <div class = "col-md-12">
                                <th>No</th>                    
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>                    
                                <th>Umur</th>
                                <th></th>
                                <th colspan = "3">Aksi</th>
                </tr>
                        <?php
                            $bio = new Biodata();
                            $no = 1;
                            foreach($bio->index() as $data) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['tgl_lahir']; ?></td>
                            <td><?php echo $data['jk']; ?></td>
                            <td><?php echo $data['agama']; ?></td>
                            <td><?php echo $data['umur']; ?></td>
                            
                            <td><button class = "btn btn-outline-primary"><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show" style = "text-decoration: none; color: black">Show</a></button></td>
                            <td><button class = "btn btn-outline-success"><a href="edit.php?id=<?php echo $data['id']; ?>" style = "text-decoration: none; color: black">Edit</a></button></td>
                            <td><button class = "btn btn-outline-danger"><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah anda yakin mau menghapus data ini?');" style = "text-decoration: none; color: black">Delete</a></button></td>
                        </tr>
        <?php }?>   
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    </table>
    <button class = "btn btn-outline-success"><a href="/biodata/create.php" style = "text-decoration: none; color: black">Input Biodata</a></button>
    
</body>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>