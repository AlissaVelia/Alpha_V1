
    <!-- Jquery Core Js -->

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
               
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
             
               
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">IJIN</div>
                           <?php foreach ($list as $row):?>
                            <br>
                            <div><?php echo $row->JML_IJIN?></div>
                             <?php endforeach; ?>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                          <div class="text">SAKIT</div>
                             <?php foreach ($list as $row):?>
                          <br>
                            <div><?php echo $row->JML_SAKIT?></div>
                             <?php endforeach; ?>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">  <div class="text">ALPA</div>
                             <?php foreach ($list as $row):?>
                          <br>
                            <div><?php echo $row->JML_ALPA?></div>
                             <?php endforeach; ?>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
               
            </div>
            </div>
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            
                            
                        </div>
                        <div class="body">
                            <div class="body">
                            <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                      <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS </th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Ijin</th>
                                    <th>Sakit</th>
                                    <th>Alpha</th>
                              

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>       <?php $no = 1;?>
                        <?php foreach ($NIS as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->NIS?></td>
                                <td><?php echo $row->NM_SISWA?></td>
                                <td><?php echo $row->LAST_ABSEN?></td>
                                <td ><?php echo $row->IJIN ?></td>
                                <td ><?php echo $row->SAKIT ?></td>
                                <td ><?php echo $row->ALPA ?></td>
                                
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
            <!-- #END# CPU Usage -->
          
        </div>
    </section>
<!-- 





<!--  <script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/js/data.js"></script>
<script src="<?php echo base_url();?>assets/js/exporting.js"></script>


    <section class="content">
        
<div id="container" id="container" style="min-width: 310px; height: 400px; margin: 0 auto">


<table id="datatable">
    
    <thead style="color: white">
        <tr>
            
            <th>Sakit</th>
          
                <td><?php echo $list->JML_SAKIT?></td>

               
        </tr>
   
   


    </thead>
    
</table>


</div>
<script>
      Highcharts.chart('container', {
    legend: {
        labelFormatter: function() 
        {
            if(this.name!='Series 1')
            {
                return this.name;
            }
            else
            {
                return '';
            }
        }
    },
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: '<?php echo hari();
                     echo tanggal(); ?>'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Jumlah Peserta'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.point.y + '</b><br/>'+ this.point.name.toLowerCase();
        }
    }
});
 </script> -->