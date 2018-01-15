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
                                <td><?php echo $row->AGAMA?></td>
                                <td><?php echo $row->BIND?></td>
                                <td><?php echo $row->MAT?></td>
                                <td><?php echo $row->SEJARAH?></td>
                                <td><?php echo $row->BING?></td>
                                <td><?php echo $row->PKN?></td>
                                <td><?php echo $row->SENBUD?></td>
                                <td><?php echo $row->PKWU?></td>
                                <td><?php echo $row->PENJAS?></td>
                                <td><?php echo $row->BJAWA?></td>
                                <td><?php echo $row->SISTEL?></td>
                                <td><?php echo $row->SISOS?></td>
                                <td><?php echo $row->WEB?></td>
                                <td><?php echo $row->PPB?></td>
                                <td><?php echo $row->PBO?></td>
                                <td><?php echo $row->PPL?></td>
                                <td><?php echo $row->GRAFIK?></td>
                                <td><?php echo $row->DESKTOP?></td>
                                <td><?php echo $row->BASDAT?></td>
                                <td><?php echo $row->RBJ?></td>
                                <td><?php echo $row->ADSER?></td>
                                <td><?php echo $row->JARDAS?></td>
                           
                                
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
