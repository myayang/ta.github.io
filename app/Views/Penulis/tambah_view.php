<div class="container p-5">
    <a href="<?= base_url('Penulis');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Penulis</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('Penulis/add');?>">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_penulis" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat Penulis</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" name="instagram" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="text" name="facebook" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>