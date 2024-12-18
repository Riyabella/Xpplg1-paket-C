<?php
require '../koneksi.php';
$sql=mysqli_query("update pengaduan status='proses' where id_pengaduan='$_GET[id]'");
if($sql)
{
    header('location:admin.php?url=Verifikasi_pengaduan');
}
?>