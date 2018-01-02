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
                                    <th>Bind</th>
                                    <th>Bing</th> 
                                    <th>PWD</th>
                              

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
                                <td><?php echo $row->BIND?></td>
                                <td><?php echo $row->BING?></td>
                                <td><?php echo $row->PWD?></td>
                           
                                
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
