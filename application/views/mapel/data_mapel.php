 
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h2>
                                DATA MAPEL
                                   </h2>
                                <br>
                         <a href="<?php echo base_url('index.php/tambah/tambah_mapel');?>" class="btn btn-success" style="float: right;margin-top: -60px">Tambah</a>
                         

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
                                    <th>Kode Mapel </th>
                                    <th>Nama Mapel</th>        
                                    <th>Aksi</th>
                              

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>
                        <?php $no = 1;?>
                        <?php foreach ($list as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->KD_MAPEL?></td>
                                <td><?php echo $row->NM_MAPEL ?></td>
                                
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/data/data_mapel/lihat/<?php echo $row->KD_MAPEL;?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs">
                                         Edit
                                    </a>
                                    <a href="<?php echo base_url() ?>index.php/data/data_mapel/hapus?rcgn=<?php echo $row->KD_MAPEL ?>" onclick="return confirm('Are you sure want to delete this file?')" class=" btn btn-danger btn-xs">
                                        Delete
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
