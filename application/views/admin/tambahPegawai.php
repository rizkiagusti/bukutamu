      <section id="content">
        <div class="container">
          <div class="section">
            <div class="divider"></div>
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div id="table-datatables">
              <h4 class="header">Tambah Pegawai</h4>
              <hr>
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <div class="row">
                      <form class="col s12" action="<?php echo base_url();?>Admin/tambahPegawai" method="POST">
                       <label >Bidang </label>
                        <select class="form-control" name="idBidang" id="idBidang" required>
                          <option value="" selected="true" disabled="true">Pilih Bidang</option>  
                             <?php foreach ($data as $bidang) {
                              ?>
                          <option value="<?php echo $bidang->idBidang;?>"><?php echo $bidang->namaBidang;?></option>
                             <?php } ?>
                        </select>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nip" name="nip" type="text" required>
                            <label for="nip">NIP </label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nama" name="nama" type="text" required>
                            <label for="nama">Nama</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password" name="password" type="password" required>
                            <label for="password">Password</label>
                          </div>
                          <div class="input-field col s12">
                        
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" type="submit" name="action">Tambah
                                <i class="mdi-content-send right"></i>
                              </button>
                              <a href="<?php echo base_url()?>Admin/dataPegawai" class="btn red waves-effect waves-light right">Batal
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