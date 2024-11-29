   <div class="card shadow">
   <div class="card-header">
       <a href="masyarakat.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-letf"></i>
        </span>
        <span claass="text"> Kembali </span>
    </a>
 </div>
 <div class="card-body">

 <form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">

   <div class="form-group">
        <Label style="font-size:14 Tgl pengaduan</label>
        <input type="text" name="tgl-pengaduan" class="form-control" disabled value="<?= data('d/m/Y'); ?>">
   </div> 

   <div class="form-group">
        <1abe-1>Isi Laporan</1abe 1>
        <textarea name="isi laporan" class="from-control" required></textarea>
   </div>

<div class="from-group">
     <1abe1>Foto</1abe1>
     <imput type="file" required class="from-control" name="foto" accept="image/">
</div>

<div class="from-group">
     <button type="submit" class="btn btn-succes">SIMPAN </button>
</div>

</form>

    </div>
    </div>
