<div class="container mt-3">

<div class="row">
    <div class="col-lg-12">
        <?php Flasher::flash(); ?>
    </div>
</div>  

<div class="container py-3">
    <h2 class="mb-3">Daftar Pesanan</h2>
    <div class="row mb-3">
        <div class="col-lg-12">
            <form action="<?= BASEURL;?>/admin/pesanan/cari" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari pesanan ..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
    
    <br>
    <br>
    <table class="table table-bordered">
        <thead class = "thead-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Layanan</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Harga</th>
                <th scope="col">Lunas</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($data['pesanan'] as $psn):?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $psn['nama_layanan'];?></td>
                <td><?= $psn['nama_customer'];?></td>
                <td>Rp<?= $psn['harga'];?></td>
                <td><?= $psn['lunas'];?></td>
            </tr>
                <?php $no+=1;?>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
</div>
