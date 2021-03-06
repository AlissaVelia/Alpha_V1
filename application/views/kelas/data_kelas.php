
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h2>
                                DATA KELAS
                                   </h2>
                                <br>
                         <a href="<?php echo base_url('index.php/tambah/tambah_kelas');?>" class="btn btn-success" style="float: right;margin-top: -60px">Tambah</a>
                         

                        </div>
                        <?php
                          $notif = $this->session->flashdata('notif');
                          if (!empty($notif))
                            echo "<div class='alert alert-info alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>$notif</div>";
                          ?>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="text-align: center;">Kode Kelas </th>
                                    <th style="text-align: center;">Nama Kelas</th>
                                    <th style="text-align: center;">Jumlah Siswa</th>
                                    <th style="text-align: center;">Aksi</th>
                              

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>
                        <?php $no = 1;?>
                        <?php foreach ($list as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td style="text-align: center;"><?php echo $row->KD_KELAS?></td>
                                <td style="text-align: center;"><?php echo $row->NM_KELAS ?></td>
                                <td style="text-align: center;"><?php echo $row->JML_SISWA ?></td>
                                
                                <td style="text-align: center;">
                                    <a href="<?php echo base_url(); ?>index.php/data/data_kelas/lihat/<?php echo $row->KD_KELAS;?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs">
                                         Edit
                                    </a>
                                    <a href="<?php echo base_url() ?>index.php/data/data_kelas/hapus/<?php echo $row->KD_KELAS ?>" onclick="return confirm('Are you sure want to delete this file?')" class=" btn btn-danger btn-xs">
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
   