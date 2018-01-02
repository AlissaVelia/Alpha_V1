
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>

                     <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA SISWA
                            </h2>
                          
                        </div>
                        <div class="body">

                            <?php
                            if(!empty($notif))
                            {
                                echo "<div class='alert alert-danger'>".$notif."</div>";
                            }

                            ?>

                            <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/data/data_siswa/edit/<?php echo $list->NIS;?>" method="post">
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
                                         <label>Kode Walsis</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                  <select data-placeholder="Pilih" class="form-control" name="KD_WALSIS" value="<?php echo $list->KD_WALSIS;?>">
                                       <?php
                                          foreach ($KD_WALSIS as $row) { ?>
                                                       <option value="<?= $row->KD_WALSIS; ?>" <?php if($list->KD_WALSIS == $row->KD_WALSIS) echo "selected" ?>
                                                       >
                                                       <?php
                                                       echo $row->NM_WALSIS;
                                                       ?>
                                                       </option>
                                                 <?php }

                                         ?>
                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                         <label>Kode Kelas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <select data-placeholder="Pilih" class="form-control" name="KD_KELAS" value="<?php echo $list->KD_KELAS;?>"> <?php
                                          foreach ($KD_KELAS as $row) { ?>
                                                       <option value="<?= $row->KD_KELAS; ?>" <?php if($list->KD_KELAS == $row->KD_KELAS) echo "selected" ?>
                                                       >
                                                       <?php
                                                       echo $row->NM_KELAS;
                                                       ?>
                                                       </option>
                                                 <?php }

                                         ?>
                                    </select>
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
                                                 
                                    <input class="form-control" name="NM_SISWA" value="<?php echo $list->NM_SISWA;?>">
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
                                            <input type="date" class="form-control" name="TTL" value="<?php echo $list->TTL;?>">
 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input type="data-placeholder" class="form-control" name="ALAMAT" value="<?php echo $list->ALAMAT;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Asal SMP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <input class="form-control" name="ASAL_SMP" value="<?php echo $list->ASAL_SMP;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>No Telp</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="number" class="form-control" name="NO_TELP" value="<?php echo $list->NO_TELP;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Nama Ayah</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="text" class="form-control" name="NM_AYAH" value="<?php echo $list->NM_AYAH;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Nama Ibu</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="tex" class="form-control" name="NM_IBU" value="<?php echo $list->NM_IBU;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>No Ayah</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="number" class="form-control" name="NO_AYAH" value="<?php echo $list->NO_AYAH;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>No Ibu</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="number" class="form-control" name="NO_IBU" value="<?php echo $list->NO_IBU;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                              <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label>Jenis Kelamin</label> 
                                    </div>
                                 <div class="demo-radio-button">
                                    <br>
                                <input type="radio" id="radio_31" class="with-gap radio-col-cyan" name="JENKEL" value="L"<?php echo $list->JENKEL=='L'?'checked':''; ?>>
                                <label for="radio_31">LAKI LAKI</label>
                                <input type="radio" id="radio_37" class="with-gap radio-col-pink" name="JENKEL" value="P" <?php echo $list->JENKEL=='P'?'checked':''; ?>>
                                <label for="radio_37">PEREMPUAN</label>
                                 </div>

                                 
                                 
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                           <a class="btn btn-info" href="<?php echo base_url('index.php/data/data_siswa') ?>">Back</a>
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









