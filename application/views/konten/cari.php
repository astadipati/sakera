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
        $sql ="SELECT * FROM v_dashboard where namaPA ='Pengadilan Agama Tuban'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {?>
            <label>Update Data: <?php 
            $date = $row->time_stamp;
            $newDate = date ("d M Y h:i:s", strtotime($date));
            echo $newDate ;?> WIB</label>
        <?php }
        }
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
                    <input type="text" name="keyword" placeholder="Cari berdasarkan apapun" class="form-control col-md-5">        

                    </div>
                    <div class="col-lg-4">
                    <input type="submit" value="Cari" class="btn btn-warning">
                    <a href='<?php echo base_url()?>ac/data_ac' class="btn btn-success " > Reset </a>
                    </div>
                    <?php echo form_close();?>	
                <!-- </div> -->
                <br>
                <br>
                <br>
                  <table width="100%" class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
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
                         if(count($carian)>0){
                             foreach($carian as $data){
                                //  echo $data->perkara_id;
                                 ?>

                                 <!-- tambahan tabel -->
                                 <tr class="odd gradeX">
                              <td><?php echo $no++;?></td>
                              <td><?php echo $data->nomor_perkara; ?></td>
                              <td><?php echo $data->jenis_perkara; ?></td>
                              <td><?php echo $data->nomor_akta_cerai; ?></td>
                              <td><?php echo $data->tgl_ac; ?></td>
                              <td><?php echo $data->no_seri_akta_cerai; ?></td>
                              <td><?php $faktor =  $data->faktor_perceraian_id; 
                                        if($faktor==1){
                                            echo "Zina";
                                        }else if($faktor==2){
                                            echo "Mabuk";
                                        }else if($faktor==3){
                                            echo "Madat";
                                        }else if($faktor==4){
                                            echo "Judi";
                                        }else if($faktor==5){
                                            echo "Meninggalkan Salah Satu Pihak";
                                        }else if($faktor==6){
                                            echo "Dihukum Penjara";
                                        }else if($faktor==7){
                                            echo "KDRT";
                                        }else if($faktor==8){
                                            echo "Cacat Badan";
                                        }else if($faktor==9){
                                            echo "Perselisihan & Pertengkaran";
                                        }else if($faktor==10){
                                            echo "Kawin Paksa";
                                        }else if($faktor==11){
                                            echo "Murtad";
                                        }else if($faktor==12){
                                            echo "Ekonomi";
                                        }else if($faktor==13){
                                            echo "Poligami";
                                        }else if($faktor==14){
                                            echo "Lain-lain";
                                        }else if($faktor==15){
                                            echo "Poligami Tidak Sehat";
                                        }else if($faktor==16){
                                            echo "Krisis Akhlak";
                                        }else if($faktor==17){
                                            echo "Cemburu";
                                        }else if($faktor==18){
                                            echo "Tidak Ada Tanggung Jawab";
                                        }else if($faktor==19){
                                            echo "Kawin Dibawah Umur";
                                        }else if($faktor==20){
                                            echo "Dihukum";
                                        }else if($faktor==21){
                                            echo "Cacat Biologis";
                                        }else if($faktor==22){
                                            echo "Politis";
                                        }
                                  ?></td>
                              <td>
                                  <center>
                                    <div class="tooltip-demo">
                                      <a href='<?php echo base_url()?>ac/detil/<?=$data->perkara_id;?>' class="btn btn-success btn-circle " > Detil </a>
                                    </div>
                                  </center>
                              </td>
                          </tr>
                                 <!-- end tabel -->

                                 <?php
                             }
                         }else{
                             ?>
                            <td colspan="8"><?php echo "Data tidak ditemukan";?></td>
                        <?php

                         }
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
