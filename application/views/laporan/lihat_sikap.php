    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h2>
                                LAPORAN SIKAP SISWA
                                   </h2>
                                <br>
                 <!-- <a href="<?php echo base_url('index.php/laporan/laporan_sikap/del_riwayat');?>" class="btn btn-success" style="float: right;margin-top: -60px" onclick="return confirm('Apakah anda ingin menghapus semua riwayat ?')">HAPUS RIWAYAT</a> -->
                <!-- alert tambah sikap -->
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
                         

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Walsis</th>
                                    <th>Kelas</th>        
                                    <th>Agama</th>
                                    <th>Bind</th> 
                                    <th>Mat</th>
                                    <th>Sejarah</th>
                                    <th>Bing</th>
                                    <th>Pkn</th>
                                    <th>Senbud</th>
                                    <th>Pkwu</th>
                                    <th>Penjas</th>
                                    <th>Bjawa</th>
                                    <th>Sistel</th>
                                    <th>Sisos</th>
                                    <th>Web</th>
                                    <th>Ppb</th>
                                    <th>Pbo</th>  
                                    <th>Ppl</th>
                                    <th>Grafik</th>                    
                                    <th>Desktop</th>
                                    <th>Basdat</th>
                                    <th>Rbj</th>
                                    <th>Adser</th>
                                    <th>Jardas</th>
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
                                <td><?php echo $row->WALSIS?></td>
                                <td><?php echo $row->KELAS?></td>
                                <td><?php echo $row->PAI?></td>
                                <td><?php echo $row->BIND?></td>
                                <td><?php echo $row->MATEMATIKA?></td>
                                <td><?php echo $row->SEJARAHIND?></td>
                                <td><?php echo $row->BING?></td>
                                <td><?php echo $row->KEWARGANEGARAAN?></td>
                                <td><?php echo $row->SBD?></td>
                                <td><?php echo $row->WIRAUSAHA?></td>
                                <td><?php echo $row->PENJAS?></td>
                                <td><?php echo $row->BD?></td>
                                <td><?php echo $row->TELEKOMUNIKASI?></td>
                                <td><?php echo $row->SO?></td>
                                <td><?php echo $row->PWD?></td>
                                <td><?php echo $row->ANDROID?></td>
                                <td><?php echo $row->JAVA?></td>
                                <td><?php echo $row->PRG_LUNAK?></td>
                                <td><?php echo $row->PGRAFIK?></td>
                                <td><?php echo $row->DSKTP?></td>
                                <td><?php echo $row->BASISDATA?></td>
                                <td><?php echo $row->BANGUNJARINGAN?></td>
                                <td><?php echo $row->ADMINSERVER?></td>
                                <td><?php echo $row->JARINGANDASAR?></td>
                           
                                
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
