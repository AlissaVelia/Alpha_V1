  
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h2>
                                LAPORAN KEHADIRAN SISWA
                                   </h2>
                                <br>
                      
                          <a href="<?php echo base_url('index.php/laporan/laporan_kehadiran/del_riwayat');?>" class="btn btn-success" style="float: right;margin-top: -60px" onclick="return confirm('Apakah anda ingin menghapus semua riwayat ?')">HAPUS RIWAYAT</a>

                        </div>
                        <div class="body">
                           <?php
                            if(!empty($notif))
                            {
                                echo "<div class='alert alert-danger'>".$notif."</div>";
                            }

                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>        
                                    <th>Masuk</th>
                                    <th>Ijin</th> 
                                    <th>Sakit</th>
                                    <th>Alpa</th>

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>
                        <?php $no = 1;?>
                        <?php foreach ($list as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->NIS?></td>
                                <td><?php echo $row->NAMA ?></td>
                                <td><?php echo $row->KELAS?></td>
                                <td><?php echo $row->JML_MASUK?></td>
                                <td><?php echo $row->JML_IJIN?></td>
                                <td><?php echo $row->JML_SAKIT?></td>
                                <td><?php echo $row->JML_ALPA?></td>
                                
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


    <!-- Jquery Core Js -->
