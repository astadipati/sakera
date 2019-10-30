<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-6">
      <p>
      </div>
  </div>


  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
      <br>
            <hr>
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <i class="fa fa-table"></i> Grafik Data Perceraian Tahun <?php echo date("Y"); ?> di Wilayah Jawa Timur
               </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              <!-- tabs -->
<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $bulan[] = $result->bulan; //ambil bulan
        $value[] = (float) $result->jml; //ambil nilai
    }
    /* end mengambil query*/
     
?>
<div id="report"></div>


    </div>



<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Rekapitulasi Perceraian Tahun '+<?php echo date('Y');?>,
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'Se Wilayah Pengadilan Tinggi Agama Surabaya',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($bulan);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'Jumlah Perceraian pada bulan <b>' + this.x + '</b> sejumlah : <b>' + Highcharts.numberFormat(this.y,0) + '</b>, di Jawa Timur' ;
             }
          },
        series: [{
            name: 'Rekapitulasi Perceraian',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>