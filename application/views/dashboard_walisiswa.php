
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">SISWA</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            
                            <div class="text">SAKIT</div>
                           <?php print_r($sakit);?>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">IJIN</div>
                             <?php print_r($ijin);?>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ALPA</div>
                            <?php print_r($alpa);?>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">MASUK</div>
                            <?php print_r($masuk);?>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            
                            
                        </div>
                        <div class="body">
                            <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>KODE</th>
                                    <th>NIS</th>
                                   <!--  <th>Kelas</th> -->
                                    <th>LAST ABSEN</th>
                                    <th>Ijin</th>
                                    <th>Sakit</th>
                                    <th>Alpha</th>
                                    <th>Masuk</th>
                                    <th>Aksi</th>
                                    

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>
                             <?php $no = 1;?>
                        <?php foreach ($KD_WALSIS as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->NM_SISWA?><!-- 
                                <td><?php echo $row->KD_WALSIS?></td> --> 
                                <td><?php echo $row->KD_KELAS?></td>
                                <td><?php echo $row->NIS?></td><!-- 
                                <td><?php echo $row->KD_KELAS?></td> -->
                                <td><?php echo $row->LAST_ABSEN?></td>
                                <td><?php echo $row->IJIN?></td>
                                <td><?php echo $row->SAKIT ?></td>
                                <td><?php echo $row->ALPA?></td>
                                <td><?php echo $row->MASUK?></td>
                                
                                
                              <td>
                                <a href="<?php echo base_url(); ?>index.php/walisiswa/kehadiran_siswa/read_update?NIS=<?php echo $row->NIS ?>&LAST_ABSEN=<?php echo $row->LAST_ABSEN ?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs">KONFIRMASI
                                    </a></td>
                                
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                            <!-- <tr>
                                <td></td>
                               </td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                                
                                <td style="text-align: center;">
                                    
                                </td>
                          
                                
                            </tr> -->
                        </tbody>
                                </table>
                                
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
          
        </div>
    </section>