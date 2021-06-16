<div class="container mt-3">

<div class="row">
    <div class="col-lg-12">
        <?php Flasher::flash(); ?>
    </div>
</div>  

<div class="row mb-3">
    <div class="col-lg-12">
        <form action="<?= BASEURL;?>/customer/cari" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari mahasiswa ..." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        
        <h3>Daftar Mahasiswa</h3>
        <?php foreach($data['mhs'] as $mhs):?>
        <ul class="list-group">
            <li class="list-group-item">
                <?= $mhs['nama'];?>
                <a href="<?= BASEURL;?>/customer/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>  
                <a href="<?= BASEURL;?>/customer/ubah/<?= $mhs['id'];?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];?>">ubah</a>   
                <a href="<?= BASEURL;?>/customer/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right ml-1">detail</a>            
            </li>
        </ul>
        <?php endforeach;?>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judulModal">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= BASEURL;?>/mahasiswa/tambah" method="POST">
            <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" min="0" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="number" class="form-control" id="telepon" name="telepon" min="0" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" min="0" required>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
</div>