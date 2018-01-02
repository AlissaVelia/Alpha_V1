
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>

                     <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PROFIL SISWA
                            </h2>
                          
                        </div>
                        <div class="body">

                            <?php
                            if(!empty($notif))
                            {
                                echo "<div class='alert alert-danger'>".$notif."</div>";
                            }

                            ?>

                            <form class="form-horizontal" action="<?php echo base_url();?>index.php/siswa/profil" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>NIS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input class="form-control" value="<?php echo $this->session->userdata('NIS'); ?> " disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Nama Siswa</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input class="form-control" value="<?php echo $this->session->userdata('NM_SISWA'); ?> " disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>TTL</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input class="form-control" value="<?php echo $this->session->userdata('TTL'); ?> " disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>NO TELP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input class="form-control" value="<?php echo $this->session->userdata('NO_TELP'); ?> " disabled>
                                            </div>
                                        </div>
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
