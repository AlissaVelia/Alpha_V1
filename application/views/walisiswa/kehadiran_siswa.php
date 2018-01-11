
    <!-- Jquery Core Js -->
   



    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h2>
                                SIKAP SISWA
                                   </h2>
                                <br>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                      <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS </th>
                                    <th>NAMA</th>
                                    <th>KELAS</th>
                                    <th>Ijin</th>
                                    <th>Sakit</th>
                                    <th>Alpha</th>
                                    <th>Detail</th>
                              

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>       <?php $no = 1;?>
                        <?php foreach ($KD_WALSIS as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->NIS?></td>
                                <td><?php echo $row->NAMA?></td>
                                <td><?php echo $row->KELAS?></td>
                                <td ><?php echo $row->JML_IJIN ?></td>
                                <td ><?php echo $row->JML_SAKIT ?></td>
                                <td ><?php echo $row->JML_ALPA ?></td>
                                
                                </td>
                                 <td>
                                    <a href="<?php echo base_url(); ?>index.php/walisiswa/kehadiran_siswa/lihat/<?php echo $row->NIS;?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs">LIHAT
                                    </a>
                                  
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
        </div>
    </section>

    <!-- Jquery Core Js -->
   
