    <div class="container mt-3">

        <div class="row">
            <div class="col-lg-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>  

        <div class="container py-3">
            <h2 class="mb-3">Daftar Layanan</h2>
            <div class="row mb-3">
                <div class="col-lg-12">
                    <form action="<?= BASEURL;?>/admin/layanan/cari" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari layanan ..." name="keyword" id="keyword" autocomplete="off">
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
            
            <div class="row">
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary tombolTambahDataLayanan" data-toggle="modal" data-target="#myModal">
                        Tambah Data
                    </button>
                </div>
            </div>  
            <br>
            <br>
            <table class="table table-bordered">
                <thead class = "thead-dark text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($data['layanan'] as $lyn):?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $lyn['nama_layanan'];?></td>
                        <td><?= $lyn['deskripsi'];?></td>
                        <td>Rp<?= $lyn['harga'];?></td>
                        <td>
                            <a href="<?= BASEURL;?>/admin/layanan/hapus/<?= $lyn['id_layanan'];?>" class="badge badge-danger float-center ml-2" onclick="return confirm('Yakin?');">hapus</a>  
                            <a href="<?= BASEURL;?>/admin/layanan/ubah/<?= $lyn['id_layanan'];?>" class="badge badge-success float-center ml-2 tombolUbahDataLayanan" data-toggle="modal" data-target="#myModal" data-id="<?= $lyn['id_layanan'];?>">ubah</a>   
                        </td>
                    </tr>
                        <?php $no+=1;?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Add Modal -->
    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Tambah Data Layanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" id="container-addModal">
                        <form id="myModal" action="<?= BASEURL;?>/admin/layanan/tambah" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_layanan" id="id_layanan">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="nama_layanan">Nama Layanan :</label>
                                    <input required type="text" class="form-control" id="nama_layanan" name="nama_layanan">
                                </div>
                                <div class="form-group col-12">
                                    <label for="deskripsi">Deskripsi :</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                    <!-- <input required type="text" class="form-control" id="deskripsi" name="deskripsi"> -->
                                </div>
                                <div class="form-group col-12">
                                    <label for="harga">Harga :</label>
                                    <input required type="number" class="form-control" id="harga" name="harga">
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
