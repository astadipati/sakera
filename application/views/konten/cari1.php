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
      <div class="col-lg-12">
      <br>
      <?php
        ?>
            <hr>
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <i class="fa fa-table"></i> Data Akte Cerai
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              <!-- tabs -->
              
              <!-- end tab -->
                <!-- <div class="row"> -->
                <div class="col-lg-4">
                    <?php $keyword = array('class' => 'row'); ?>
				    <?php echo form_open('ac/search',$keyword);?>
                    <input type="text" name="keyword" placeholder="Cari berdasarkan Nomor Akte Cerai" class="form-control col-md-5">        

                    </div>
                    <div class="col-lg-4">
                    <input type="submit" value="Cari" class="btn btn-warning">
                    </div>
                    <?php echo form_close();?>	
                <!-- </div> -->
                <br>
                <br>
                <br>
                  <table width="100%" class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>No Cari 1</th>
                              <th>No Perkara</th>
                              <th>Jenis Perkara</th>
                              <th>Nomor AC</th>
                              <th>Tanggal AC</th>
                              <th>Nomor Seri</th>
                              <th>Faktor Perceraian</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                         <?php 
                         $no =  1;

                                //  echo $data->perkara_id;
                                 ?>

                                 <!-- tambahan tabel -->
                                 <tr class="odd gradeX">
                            <td colspan="8"><?php echo "Data Akte Cerai";?></td>
                              
                          </tr>
                                 <!-- end tabel -->


                             
                        <?php

                         
                         ?>
                      </tbody>
                  </table>
                  
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
<!-- modal tambah -->
<!-- manual modal -->
