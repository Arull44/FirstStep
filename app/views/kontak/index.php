    <!-- Awal Jumbotron -->
      <section class="jumbotron-bg">
        <div class="jumbotron warna-bg text-white">
          <div class="container">
            <h1 class="display-4">Kontak / Hubungi Kami</h1>
          </div>
        </div>
      </section>
    <!-- Akhir Jumbotron -->

    <!-- Awal Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="alert alert-success" role="alert">
                  Punya saran, pertanyaan, masukan, kritik, cerita permasalahan anda atau menemukan bugs di website ini?
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>  
                <form action="<?= BASEURL;?>/kontak/tambah" method="POST">
                    <div class="form-group">
                      <label for="nama_customer">Nama</label>
                      <input type="text" class="form-control" id="nama_customer" name="nama_customer"placeholder="Input Nama" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Input Email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="telepon">Telepon</label>
                      <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Input telepon" required>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="cerita">Ceritakan masalahmu</label>
                      <textarea class="form-control" id="cerita" name="cerita" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Akhir Content -->
    