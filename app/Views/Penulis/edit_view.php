<div class="container p-5">
    <a href="<?= base_url('Penulis');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Penulis : <?= $Penulis->nama_lengkap;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('Penulis/update');?>">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" value="<?= $Penulis->nama_penulis;?>" name="nama_penulis" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" value="<?= $Penulis->nama_penulis;?>" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" value="<?= $Penulis->instagram;?>" name="instagram" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="text" value="<?= $Penulis->facebook;?>" name="facebook" required class="form-control">
                </div>
                <input type="hidden" value="<?= $Penulis->id_Penulis;?>" name="id_Penulis">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>