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
        ?>    <hr>
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <i class="fa fa-table"></i> Data Detil Akte Cerai
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">

                <!-- isi -->
                
                <div class="form-group">
                    <form>
                        <div class="form-group">
                            <label for="data">Nomor Perkara</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['nomor_perkara']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Jenis Perkara</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['jenis_perkara']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Tanggal Daftar</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['tgl_daftar']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Tanggal Putus</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['tgl_putus']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Pihak Pemohon / Penggugat</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['pihak_p']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Pihak Termohon / Tergugat</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['pihak_t']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Nomor Akta Cerai</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['nomor_akta_cerai']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Nomor Seri Akta Cerai</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['no_seri_akta_cerai']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Tanggal Akta Cerai</label>
                            <input type="text" class="form-control" value=" <?php echo $ac['tgl_ac']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="data">Faktor Perceraian</label>
                            <input type="text" class="form-control" value=" <?php $faktor =  $ac['faktor_perceraian_id']; 
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
                                        ?>" readonly>
                        </div>
                        
                        <a href='<?php echo base_url()?>ac/cari/' class="btn btn-primary " > Kembali </a>
                    </form>
                </div>


                <!-- end isi -->

              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
<!-- modal tambah -->
<!-- manual modal -->
<!-- end modal -->

<!-- /#page-wrapper --> 
