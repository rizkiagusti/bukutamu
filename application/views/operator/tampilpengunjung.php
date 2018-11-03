      <section id="content">
        <div class="container">
          <div class="section">
            <div class="divider"></div>
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div id="table-datatables">
              <h4 class="header">Tampil Daftar Pengunjung</h4>
              <hr>
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <div class="row">
                      <form class="col s12" action="<?php echo base_url('Operator/kirimPesan/'.$kirim->idPeng); ?>" method="POST">
                        <div class="row">
                          <div class="input-field col s12">

                          </div>
                        </div>
                        
                          <div class="input-field col s5">

                            <div class="form-group label-floating" ><font color="blue"> No KTP </font></div>
                            <input id="noKtp" name="noKtp" type="text" value="<?php echo $kirim->noKtp;?>" required readonly>
                                                      
                            <div class="form-group label-floating"><font color="blue">Nama</font></div>
                            <input id="nama" name="nama" type="text" value="<?php echo $kirim->nama;?>" required readonly>
                            
                            <div class="form-group label-floating"><font color="blue">Institusi</font></div>
                            <input id="institusi" name="institusi" type="text" value="<?php echo $kirim->institusi;?>" required readonly>
                            
                            <div class="form-group label-floating"><font color="blue">Tujuan</font></div>
                            <input id="tujuan" name="tujuan" type="text" value="<?php echo $kirim->tujuan;?>" required readonly>
                            
                            <div class="form-group label-floating"><font color="blue">Pegawai</font></div>
                             <select class="form-control" id="nip" name="nip" required>
                                <option value="" selected="true" disabled="true">Pilih Pegawai</option>  
                                    <?php foreach ($pilih as $pegawai) {
                                                        ?>
                                <option value="<?php echo $pegawai->nip;?>"><?php echo $pegawai->namaPegawai;?></option>
                                                <?php } ?>
                             </select>
                          
                          </div>

                          <div class="col-sm-6">
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="form-group label-floating"><font color="blue">Foto</font></div>
                              <img src="<?php echo base_url('assets/utama/img/pengunjung/'.$kirim->fotoPengunjung); ?>">
                          </div>
                          
                        

                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" type="submit" name="action">Kirim
                                <i class="mdi-content-send right"></i>
                              </button>
                              <a href="<?php echo base_url()?>Operator/beranda" class="btn red waves-effect waves-light right">Batal
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
