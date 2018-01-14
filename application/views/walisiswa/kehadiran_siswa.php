
    <!-- Jquery Core Js -->
   <script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/js/data.js"></script>
<script src="<?php echo base_url();?>assets/js/exporting.js"></script>



 

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                            <h1 style="text-align: center; font-style: bold">
                                Grafik Kehadiran Siswa 
                                <?php
                                            echo date('Y'); ?>
                                   </h1>
                                <br>

                        </div>
                        <div class="body">
                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<table id="datatable">
    
    <thead >

       <tr>
                   <?php foreach ($KD_WALSIS as $row):?>
        <tr style="color: white">
            <th><?php echo $row->NAMA ?> </th>
            <td><?php echo $row->JML_SAKIT ?></td> 
            <td><?php echo $row->JML_IJIN ?></td>
            <td><?php echo $row->JML_ALPA?></td>
        </tr>
         <?php endforeach; ?> 
           

        </tr>


    </thead>
    
</table>
<script>
      Highcharts.chart('container', {
    legend: {
        labelFormatter: function() 
        {
            if(this.name!='v')
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
        text: ''
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Presensi'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.point.y + '</b><br/>'+ this.point.name.toLowerCase();
        }
    }
});
 </script>
                            <div class="table-responsive">

                                <table class="table " style="height: 5px">
                                      <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS </th>
                                    <th>NAMA</th>
                                    <th>KELAS</th>
                                   <!--  <th>Ijin</th>
                                    <th>Sakit</th>
                                    <th>Alpha</th> -->
                                    <th>Detail</th>
                              

                                </tr>
                            </thead>

                                <!-- untuk menampilkan data ke halaman dari database -->
                            <tbody>       <?php $no = 1;?>
                        <?php foreach ($KD_WALSIS as $row):?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->NIS?></td>
                                <td><?php echo $row->NAMA?></td>
                                <td><?php echo $row->KELAS?></td>
                               <!--  <td ><?php echo $row->JML_IJIN ?></td>
                                <td ><?php echo $row->JML_SAKIT ?></td>
                                <td ><?php echo $row->JML_ALPA ?></td> -->
                                
                                </td>
                                 <td>
                                    <a href="<?php echo base_url(); ?>index.php/walisiswa/kehadiran_siswa/lihat/<?php echo $row->NIS;?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs">LIHAT
                                    </a>
                                  
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
        
    </section>
    </section>

    <!-- Jquery Core Js -->
   
