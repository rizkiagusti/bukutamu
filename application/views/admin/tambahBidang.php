      <section id="content">
        <div class="container">
          <div class="section">
            <div class="divider"></div>
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div id="table-datatables">
              <h4 class="header">Tambah Bidang</h4>
              <hr>
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <div class="row">
                      <form class="col s12" action="<?php echo base_url();?>Admin/tambahBidang" method="POST">
                       
                        <div class="row">
                          <div class="input-field col s1">
                            <input id="idBidang" name="idBidang" type="text" value="<?= $kodeunik ?>" required readonly>
                            <label for="idBidang" class="active">ID</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="namaBidang" name="namaBidang" type="text" required>
                            <label for="nama">Nama</label>
                          </div>
                        </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" type="submit" name="action">Tambah
                                <i class="mdi-content-send right"></i>
                              </button>
                              <a href="<?php echo base_url()?>Admin/dataBidang" class="btn red waves-effect waves-light right">Batal
                                <i class="mdi-content-undo right"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
  </section>