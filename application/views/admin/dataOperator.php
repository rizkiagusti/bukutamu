      <section id="content">
        <div class="container">
          <div class="section">
            <div class="divider"></div>
            
            <div id="table-datatables">
              <h4 class="header">Data Operator</h4>
              <hr>
              <div class="row">
              <!-- alert -->
              <?php if($this->session->flashdata('info')){?>
              <div class="row" id="alert_box">
                <div class="col s12 m12">
                  <div class="card green darken-1">
                    <div class="row">
                      <div class="col s12 m10">
                        <div class="card-content white-text center">
                          <p><?php echo $this->session->flashdata('info')?></p>
                      </div>
                    </div>
                    <div class="col s12 m2">
                      <i class="mdi-content-clear icon_style" id="alert_close" aria-hidden="true"></i>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
              <?php } ?>
              <!-- End Alert -->
                <div class="col s12 m8 l11">
                <a href="<?php echo base_url();?>admin/tambah" class="btn blue ">Tambah<i class="mdi-av-playlist-add right"></i></a>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                  
                        <tr>
                            <th>ID </th>
                            <th>Nama</th>
                            <th>Hak Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    <?php 
                        foreach ($data as $akses) {
                    ?>
                        <tr>
                            <td><?php echo $akses->idAkses ?></td>
                            <td><?= $akses->namaAkses ?></td>
                            <td><?= $akses->hakAkses ?></td>
                            <td>
                              <a href="<?php echo base_url();?>admin/hapusOperator/<?= $akses->idAkses ?>" data-target="modal1" class="modal-trigger" style="color:red" rel="tooltip" title="Hapus"><i class="mdi-action-delete"></i></a>&nbsp;
                              <div id="modal1" class="modal">
                        <div class="modal-content">
                          <h4>Apakah Yakin Dihapus?</h4>
                          <h4><?php echo $akses->idAkses ?>
                        </div>
                        <div class="modal-footer">
                          <a class="modal-action modal-close waves-effect waves-green btn-flat" id="alert_close" aria-hidden="true"> Tidak</a>
                          <a href="<?php echo base_url();?>admin/hapusOperator/<?= $akses->idAkses ?>" class="modal-action waves-effect waves-blue btn-flat">Ya</a>
                       </div>
                      </div>
                            </td>
                        </tr>
                        
                      <!-- Modal Structure -->
                       
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>       
          </div>
        </div>
      </section>