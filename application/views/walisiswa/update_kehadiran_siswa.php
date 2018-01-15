
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>

                     <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UPDATE KEHADIRAN SISWA
                            </h2>
                          
                        </div>
                        <div class="body">

                            <?php
                            if(!empty($notif))
                            {
                                echo "<div class='alert alert-danger'>".$notif."</div>";
                            }

                            ?>

                            <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/walisiswa/kehadiran_siswa/update_kehadiran_siswa?NIS=<?php echo $list->NIS;?>&LAST_ABSEN=<?php echo $list->LAST_ABSEN?>" method="post">
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Nama Siswa</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 
                                    <input class="form-control" name="NM_SISWA" value="<?php echo $list1->NM_SISWA;?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>NIS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input class="form-control" name="NIS" value="<?php echo $list->NIS;?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Tanggal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="date" class="form-control" name="LAST_ABSEN"  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                         <label>Keterangan</label>
                                    </div>
                          <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                   <input type="radio" id="radio_1" class="with-gap radio-col-cyan" name="kehadiran" value="ijin"<?php echo $list->IJIN=='1'?'checked':''; ?>>
                                   <label for="radio_1">IJIN</label>

                                   <input type="radio" id="radio_2" class="with-gap radio-col-orange" name="kehadiran" value="alpa"<?php echo $list->ALPA=='1'?'checked':''; ?>>
                                   <label for="radio_2">ALPA </label>

                                   
                                   <input type="radio" id="radio_3" class="with-gap radio-col-red" name="kehadiran" value="sakit"<?php echo $list->SAKIT=='1'?'checked':''; ?>>
                                   <label for="radio_3">SAKIT</label>



                               <!--      <form class="form-horizontal" action="<?php echo base_url();?>index.php/siswa/dashboard/masuk" method="post">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                            <input type="submit" class="btn btn-danger center-block" style="height: 60px;width: 200px" value="MASUK" name="submit">
                            </div> 
                            </form> -->
                                    <!-- </div>
                                 <div class="demo-radio-button">
                                    <br>
                                <input type="radio" id="radio_31" class="with-gap radio-col-cyan" name="SAKIT" value="1"<?php echo $list->SAKIT=='1'?'checked':''; ?>>
                                <label for="radio_31">Sakit 1</label>
                                 <input type="radio" id="radio_31" class="with-gap radio-col-cyan" name="IJIN" value="0"<?php echo $list->IJIN=='0'?'checked':''; ?>>
                                <label for="radio_31">IJIN</label>
                                 -->

                               

                                   
                            
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <a class="btn btn-info" href="<?php echo base_url('index.php/walisiswa/dashboard') ?>">Back</a>
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









