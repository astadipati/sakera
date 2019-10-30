<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-6">
      <p>
      <?php 
  $data=$this->session->flashdata('sukses');
  if($data!=""){ ?>
  <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
  <?php } ?>

  <?php 
  $data2=$this->session->flashdata('error');
  if($data2!=""){ ?>
  <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
  <?php } ?>

      </div>
  </div>


  <!-- /.row -->
  <div class="row">
      
<script type="text/javascript">
  
  $(function () { 
    
      var data_click = <?php echo $click; ?>;
  
    
      $('#container').highcharts({
          chart: {
              type: 'column'
          },
          title: {
              text: 'Grafik Perceraian Tahun 2019'
          },
          xAxis: {
              categories: ['Januari','Februari','Maret', 'April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
          },
          yAxis: {
              title: {
                  text: 'Jumlah Perkara'
              }
          },
          series: [{
              name: 'Data Perbulan',
              data: data_click
          }]
      });
  });
    
  </script>
    
  <div class="container">
      <br/>
      <h2 class="text-center">Tabel Data</h2>
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Tabel Grafik Data Perceraian</div>
                  <div class="panel-body">
                      <div id="container"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
      <!-- /.col-lg-12 -->
  </div>
<!-- modal tambah -->
<!-- manual modal -->
