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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
</head>
<body>
<br>
    <div class = "col-md-12">
        <div class = "card">
            <div class = "card-body">
            <table class = "table" id="how">
                <div class = "card-header bg-dark">
                <div class = "container-fluid"><h2 style = "color: white"><center>Biodata</center></h2></div>
                    <div class="container">
                        <div class="row">
                           <div class = "col-md-6">
                           <thead class = "thead-dark">
                              <tr>  
                                <th>No</th>                    
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>                    
                                <th>Umur</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
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
                            
                            <td><button class = "btn btn-outline-primary"><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show" style = "text-decoration: none; color: black">Show</a></button>
                                <button class = "btn btn-outline-dark"><a href="edit.php?id=<?php echo $data['id']; ?>" style = "text-decoration: none; color: black">Edit</a></button>
                                <button class = "btn btn-outline-danger"><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah anda yakin mau menghapus data ini?');" style = "text-decoration: none; color: black">Delete</a></button>
                            </td>
                        </tr>
                        
        <?php }?>   
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            </tbody> 
        </table>
    </div>
    <center><button class = "btn btn-outline-dark"><a href="/biodata/create.php" style = "text-decoration: none; color: black">Input Biodata
    </a></button></center>
    </div>
</body>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#how').DataTable();
        } );
    </script>
</html>