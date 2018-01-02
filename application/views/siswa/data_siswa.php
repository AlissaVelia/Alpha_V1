
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h2>
                                DATA SISWA
                                   </h2>
                                <br>
                         <a href="<?php echo base_url('index.php/tambah/tambah_siswa');?>" class="btn btn-success" style="float: right;margin-top: -60px">Tambah</a>
                         

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
                                    <th>NIS</th>
                                    <th>Kode Walisiswa </th>
                                    <th>Kode Kelas </th>
                                    <th>Nama siswa</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Asal SMP</th>
                                    <th>No Telp </th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Nomor Ayah</th>
                                    <th>Nomor Ibu </th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                              

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>
                        <?php $no = 1;?>
                        <?php foreach ($list as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->NIS?></td>
                                <td><?php echo $row->KD_WALSIS?></td>
                                <td><?php echo $row->KD_KELAS ?></td>
                                <td><?php echo $row->NM_SISWA ?></td>
                                <td><?php echo $row->TTL ?></td>
                                <td><?php echo $row->ALAMAT ?></td>
                                <td><?php echo $row->ASAL_SMP ?></td>
                                <td><?php echo $row->NO_TELP ?></td>
                                <td><?php echo $row->NM_AYAH ?></td>
                                <td><?php echo $row->NM_IBU ?></td>
                                <td><?php echo $row->NO_AYAH ?></td>
                                <td><?php echo $row->NO_IBU ?></td>
                                <td><?php echo $row->JENKEL?></td>
                                
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/data/data_siswa/lihat/<?php echo $row->NIS;?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs">Edit
                                    </a>
                                    <a href="<?php echo base_url() ?>index.php/data/data_siswa/hapus?rcgn=<?php echo $row->NIS ?>" onclick="return confirm('Are you sure want to delete this file?')" class=" btn btn-danger btn-xs">
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
   

