<div class="container p-5">
    <a href="<?= base_url('Buku');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Buku : <?= $Buku->judul_buku;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('Buku/update');?>">
                <div class="form-group">
                    <label for="">Judul Buku</label>
                    <input type="text" value="<?= $Buku->judul_buku;?>" name="judul_buku" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis Buku</label>
                    <select name="jenis_buku" class="form-control" value="<?= $Buku->jenis_buku; ?>">
                        <option value="Novel">Novel</option>
                        <option value="Kumpulan Cerpen">Kumpulan Cerpen</option>
                        <option value="Buku Pelajaran">Buku Pelajaran</option>
                        <option value="Kumpulan Puisi">Kumpulan Puisi</option>
                        <option value="Majalah">Majalah</option>
                    </select>                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" value="<?= $Buku->penerbit;?>" name="penerbit" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Penulis</label>
                    <input type="text" value="<?= $Buku->penulis;?>" name="penulis" required class="form-control">
                </div>
                <input type="hidden" value="<?= $Buku->id_buku;?>" name="id_buku">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>