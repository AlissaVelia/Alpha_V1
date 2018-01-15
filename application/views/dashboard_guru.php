
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <?php
                if ($this->session->flashdata('addsikap')) {
                    # code...
                    ?>
                    <div class="alert alert-success"> 
                        <?php echo $this->session->flashdata('addsikap')?>
                    </div>
                <?php
                }
            ?>
            <!-- Widgets -->
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>List Siswa</h2>
                                </div>
                            </div>
                        </div>

                    <!-- mulai tabel -->
                       <div class="body">

                            <div class="table-responsive">
                                <table class="table table-stripped table-bordered table-hover dataTable" 
                                id="dataTables-example" >
                                      <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama siswa</th>
                                    <th>Nama Kelas </th>
                                    <th>No Telp </th>
                                    <th>Jenis Kelamin</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            
                            <tbody>

                        <?php $no = 1;
                            foreach ($list as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td id="1"><?php echo $row->NIS ?></td>
                                <td><?php echo $row->NM_SISWA ?></td>
                                <td><?php echo $row->NM_KELAS ?></td>
                                <td><?php echo $row->NO_TELP ?></td>
                                <td><?php echo $row->JENKEL ?></td>
                                <td>
                                   <div data-role="main" class="ui-content">
                                        <a href="#myPopup<?php echo $row->NIS ?>" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-plus ui-btn-icon-left" style="background-color: #f97e20; color: white">Tambah Sikap</a>

                                        <div data-history="false" data-role="popup" id="myPopup<?php echo $row->NIS ?>" class="ui-content" style="min-width:250px;">
                                          <form role="form" action="<?php echo base_url('index.php/guru_login/proses')?>" method="post">
                                            <div>
                                              <label>Nama Siswa:</label>
                                              <input type="text" name="nama_siswa" value="<?php echo $row->NM_SISWA ?>" readonly>
                                              <label>NIS Siswa:</label>
                                              <input type="text" name="nis_siswa" value="<?php echo $row->NIS?>" readonly>
                                              <label>Nilai Sikap:</label>
                                              <label for="sikap_1">
                                                 <?php echo form_radio('sikap_siswa', 'A', set_checkbox('sikap_siswa', 'A',TRUE), "id='sikap_1'" ); ?> A
                                              </label>
                                              <label for="sikap_2">
                                                <?php echo form_radio('sikap_siswa', 'B', set_checkbox('sikap_siswa', 'B'), "id='sikap_2'"); ?> B
                                              </label>
                                              <label for="sikap_3">
                                                <?php echo form_radio('sikap_siswa', 'C', set_checkbox('sikap_siswa', 'C'), "id='sikap_3'"); ?> C
                                              </label>
                                              <label for="sikap_4">
                                                <?php echo form_radio('sikap_siswa', 'D', set_checkbox('sikap_siswa', 'D'), "id='sikap_4'"); ?> D
                                              </label>
                                              <input type="submit" value="Submit" data-ajax="false">
                                            </div>
                                          </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                        </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
          
        </div>
    </section>