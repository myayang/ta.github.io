<div class="container p-5">
    <a href="<?= base_url('buku');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Barang</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('buku/add');?>">
                <div class="form-group">
                    <label for="">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Buku</label>
                    <input type="text" name="jenis_buku" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Penulis</label>
                    <input type="text" name="penulis" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>