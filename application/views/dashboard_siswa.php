
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">SAKIT</div>
                            <?php foreach ($list as $row):?>
                               <br>
                            <div><?php echo $row->JML_SAKIT?></div>
                            <br>
                             <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                             <div class="text">IJIN</div>
                            <?php foreach ($list as $row):?>
                                <br>
                            <div><?php echo $row->JML_IJIN?></div>
                            <br>
                             <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content"> 
                            <div class="text">ALPHA</div>
                             <?php foreach ($list as $row):?>
                                <br>
                            <div> <?php echo $row->JML_ALPA;?> </div>
                            <br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">

                            <div class="text">MASUK</div>
                            <?php foreach ($list as $row):?>
                                <br>
                            <div><?php echo $row->JML_MASUK?></div>
                            <br>
                             <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card " >
                        <div class="header  bg-red">
                            <div class="row clearfix form_datetime" >
                                <div class="col-xs-12 col-sm-6"> 
                                <h2><?php
                                    echo hari();
                                    echo tanggal();
                                ?></h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div  class="dashboard-flot-chart">
                                
                            <div class="form-group">
                                <br><br><br><br><br><br>

                            <form type="hidden" class="form-horizontal" action="<?php echo base_url();?>index.php/siswa/dashboard/masuk" method="post">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                            <input type="submit" class="btn btn-danger center-block" style="height: 60px;width: 200px" value="MASUK" name="submit">
                            </div>
                            </form>
                            </div>
                            </div>
                              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  
                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
          
        </div>
    </section>