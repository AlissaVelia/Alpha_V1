<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/js/data.js"></script>
<script src="<?php echo base_url();?>assets/js/exporting.js"></script>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
 
            <!-- Widgets -->
            <div class="row clearfix">
                <!-- <a href="<?php echo base_url('index.php/kurikulum/dashboard/del_riwayat');?>" class="btn btn-success" style="float: right;margin-top: -60px">HAPUS RIWAYAT</a> -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                        
                            <div class="text">KELAS</div>
                            <?php echo $kls;?>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">SISWA</div>
                            <?php echo $siswa?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                         <div class="content">
                            <div class="text">Guru</div>
                            <?php echo $guru;?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">WALISISWA</div>
                            <?php echo $walsis;?>
                        </div>
                    </div>
                </div>
            </div>

<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                       
                        <div class="body">
                            <div class="table-responsive">
                                                    <div id="container" style="width: 500px">

<table id="datatable">
    
    <thead style="color: white">
        <tr>
        <tr>
            <th>Masuk</th>
            <td width="20%" style="text-align: center;"> <?php print_r($masuk);?> </td> 
            </tr>
            <th>Ijin</th>
            <td width="20%" style="text-align: center;"> <?php print_r($ijin);?> </td> 
            </tr>
            <th>Sakit</th>
            <td width="20%" style="text-align: center;"> <?php print_r($sakit);?> </td> 
            </tr>
            <th>Alpa</th>
            <td width="20%" style="text-align: center;"> <?php print_r($alpa);?> </td> 
            </tr>
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
        type: 'pie'
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
 </script>
                                 <div id="container2"">
    <table id="datatable23">
    
    <thead>
        <tr>
        <tr>
           
             <?php foreach ($pr as $row):?>
        <tr style="color: white">
            <th><?php echo $row->NM_KELAS?> </th>
            <td><?php echo $row->LAKI ?></td> 
            <td><?php echo $row->PR ?></td>
        </tr>

         <?php endforeach; ?> 
            
            </tr>
          
        </tr>


    </thead>
    
</table>


</div>
<script>
      Highcharts.chart('container2', {
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
        table: 'datatable23'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: ' Siswa SMK Telkom Malang Tahun <?php echo date('Y'); ?> '
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
 </script>

                            </div>
                            <div style="text-align: center;">Keterangan : <img src="assets/images/1.jpg" alt="icon" /> </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">


</div>
</div>

<!--  -->
                </div>
                <!-- #END# Browser Usage -->
            </div>
    </section>
