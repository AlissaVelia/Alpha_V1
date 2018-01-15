<section class="content">
        <div class="container-fluid">

            <!-- Widgets -->
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                            <form action="<?php echo base_url(); ?>index.php/guru/dashboard/tambahsikap" id="form-login" method="post">
                                <h5>Divisi :</h5>
                                <SELECT class="form-control" id="divisi" name="divisi" style="width:522px" class="glyphicon glyphicon-user" required>
                                <option value="">---PILIH SALAH SATU---</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                   
                                    
                                </SELECT>
                                
                                <input type="submit" name="submit" value="Tambah" class="btn btn-block btn-sm btn-warning">
                                </form>
                                
                            </div>
                           
                        </div>

                        <div class="body">
                        
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
          
        </div>
    </section>