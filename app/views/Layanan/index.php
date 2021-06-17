    <!-- Awal Content -->
    <div class="p-3 mb-2 bg-light text-dark">
        <div class="container">
            <div class="h2 text-center">
                <h2>Layanan FirstStep</h2>
            </div>
            <?php foreach($data['layanan'] as $lyn):?>
                <div class="card text-center">
                    <div class="card-header">
                        <?= $lyn['nama_layanan'];?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rp<?= $lyn['harga'];?></h5>
                        <p class="card-text"><?= $lyn['deskripsi'];?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <!-- Akhir Content -->
