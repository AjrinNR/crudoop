<?php 
include '../database2.php';
$bio = new Biodata();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $time = strtotime($tgl_lahir);
    $umur = date('Y') - date('Y',$time);

}
if($aksi == "tambah")
{
    $bio->create($nama,$alamat,$tgl_lahir, $jk, $agama, $umur);
    header("location:index.php");
}elseif($aksi == "update")
{
    $bio->update($id,$nama,$alamat,$tgl_lahir, $jk, $agama, $umur);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $bio->delete($_GET['id']);
    header("location:index.php");
}
?>