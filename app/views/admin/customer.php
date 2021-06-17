    <div class="container mt-3">

        <div class="row">
            <div class="col-lg-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>  

        <div class="container py-3">
            <h2 class="mb-3">Daftar Customer</h2>
            <div class="row mb-3">
            <div class="col-lg-12">
                    <form action="<?= BASEURL;?>/admin/customer/cari" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari customer ..." name="keyword" id="keyword" autocomplete="off">
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
            
            <br>
            <table class="table table-bordered">
                <thead class = "thead-dark text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($data['customer'] as $cust):?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $cust['nama_customer'];?></td>
                        <td><?= $cust['email'];?></td>
                        <td><?= $cust['username'];?></td>
                        <td><?= $cust['telepon'];?></td>
                        <td><?= $cust['alamat'];?></td>
                        <td>
                            <a href="<?= BASEURL;?>/admin/customer/hapus/<?= $cust['id_customer'];?>" class="btn btn-danger" onclick="return confirm('Yakin?');">hapus</a>  
                        </td>
                        <?php $no+=1;?>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
