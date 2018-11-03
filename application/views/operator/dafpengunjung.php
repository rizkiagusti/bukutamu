
<section id="content">
    <div class="container">
        <div id="card-stats">
            <div class="row">
                                          
            </div>
        </div>
  
        
        <div id="table-datatables">
              <h4 class="header">PENGUNJUNG HARI INI</h4>
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
                
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                  
                        <tr>
                            <th>No Ktp </th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Institusi</th>
                            
                            
                            <th>Status </th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                 
                    <tbody>
                      <?php foreach ($data as $peng) {
                      ?>
                        <tr>
                             <td><?= $peng->noKtp?></td>
                             <td><img src="<?php echo base_url('assets/utama/img/pengunjung/'.$peng->fotoPengunjung); ?>" width="100" height="100"> </td>
                             <td><?= $peng->nama?></td>
                             <td><?= $peng->institusi?></td>
                             
                             <td>
                                <?php if ($peng->status=='sudah') {
                                    echo "<span style='background-color:#3ba1f9'> Terkirim </span>";
                                }else {
                                    echo "<span style='background-color:#f22e2e'> Belum Terkirim</span>";
                                }
                                ?>
                             </td>
                            <td>
                              <a href="<?php echo base_url('operator/tampil/'.$peng->idPeng); ?>" rel="tooltip" title="Ubah" style="color:purple"><i class="mdi-editor-border-color"></i></a>   &nbsp;
                              <!-- <a href="" data-target="modal1" class="modal-trigger" style="color:red" rel="tooltip" title="Hapus"><i class="mdi-action-delete"></i></a> &nbsp; -->
                            </td>
                        </tr>
                            <!-- Modal Structure -->
                            
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                </div> 
              </div>
    </div>
</section>