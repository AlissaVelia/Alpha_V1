
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>

                     <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH MATA PELAJARAN
                            </h2>
                          
                        </div>
                        <div class="body">

                            <?php
                            if(!empty($notif))
                            {
                                echo "<div class='alert alert-danger'>".$notif."</div>";
                            }

                            ?>

                            <form class="form-horizontal" action="<?php echo base_url();?>index.php/tambah/tambah_mapel/insert_mapel" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Kode Mapel</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                  <input type="text" maxlength="15" class="form-control" name="KD_MAPEL">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                         <label>Nama Mapel</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input class="form-control" name="NM_MAPEL" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                           <a class="btn btn-info" href="<?php echo base_url('index.php/data/data_mapel') ?>">Back</a>
                                <input type="submit" class="btn btn-success" value="Submit" name="submit">
                                <input type="reset" class="btn btn-danger" value="Reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>

    </section>

