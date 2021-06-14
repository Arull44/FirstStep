    <div class="p-3 mb-2 bg-light text-dark">
        <div class="container">
            <div class="h2 text-center">
                <h2>Profil</h2>
            </div>
            <?php foreach($data['customer'] as $cust):?>
                <div class="card text-center">
                    <div class="card-header">
                        <?= $cust['nama_customer'];?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $cust['tanggal_lahir'];?></h5>
                        <p class="card-text"><?= $cust['telepon'];?></p>
                        <p class="card-text"><?= $cust['alamat'];?></p>
                    </div>
                    <!-- <div class="card-footer text-muted">
                        2 days ago
                    </div> -->
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <!-- Akhir Content -->
