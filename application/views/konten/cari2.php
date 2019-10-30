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
                    <input type="text" name="keyword" placeholder="Nomor Akte Cerai" class="form-control col-md-5">        

                    </div>
                    <div class="col-lg-4">
                    <input type="submit" value="Cari" class="btn btn-warning">
                    <a href='<?php echo base_url()?>ac/cari' class="btn btn-success " > Reset </a>
                    </div>
                    <?php echo form_close();?>	
                <!-- </div> -->
                <br>
                <br>
                <br>
                <?php
                if(count($carian)>0){
                    foreach($carian as $data){?>

                        <!-- echo $data->nomor_perkara; -->
                    

                
                <div class="crt-container-sm">        <div id="about" class="crt-paper-layers crt-animate">
            <div class="crt-paper clearfix">
                <div class="crt-paper-cont paper-padd clear-mrg">

                    <section class="section brd-btm padd-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="title-lg text-upper"><?php echo $data->namaPA;?></h2>
                                <h3 class="title-lg text-upper"><?php echo $data->nomor_perkara;?></h3>
                                <hr>
                                <div class="text-box">
                                    <p><b><?php echo $data->nama;?></b><br>
                                    <?php echo $data->alamat;?></p>
                                    <p><?php echo "Pendidikan: ".$data->pendidikan_p;?><br>
                                    <?php echo "Pekerjaan: ".$data->pekerjaan;?></p>
                                </div>
                                <hr>
                                <div class="text-box">
                                    <p><b><?php echo $data->nama2;?></b><br>
                                    <?php echo $data->alamat2;?></p>
                                    <p><?php echo "Pendidikan: ".$data->pendidikan_t;?><br>
                                    <?php echo "Pekerjaan: ".$data->pekerjaan2;?></p>
                                </div>
                                <hr>
                            </div>
                        </div>


                    </section>
                    <!-- .section -->

                    <section class="section padd-box">
                        <div class="row">
                            <div class="col-sm-6 clear-mrg">
                                <h2 class="title-thin text-muted">Info Akte Cerai</h2>

                                <dl class="dl-horizontal clear-mrg">
                                    <dt class="text-upper">Nomor</dt>
                                    <dd><?php echo $data->nomor_akta_cerai;?></dd>

                                    <dt class="text-upper">Nomor Kutipan</dt>
                                    <dd><?php echo $data->no_kutipan_akta_nikah;?></dd>

                                    <dt class="text-upper">Tanggal Kutipan</dt>
                                    <dd><?php echo $data->tgl_kutipan_akta_nikah;?></dd>

                                    <dt class="text-upper">Seri Akte Cerai</dt>
                                    <dd><?php echo $data->no_seri_ac;?></dd>

                                    <dt class="text-upper">Tanggal Akte Cerai</dt>
                                    <dd><?php echo $data->tanggal_ac;?></dd>

                                    <dt class="text-upper">Tanggal Ambil P</dt>
                                    <dd><?php echo $data->serah1;?></dd>

                                    <dt class="text-upper">Tanggal Ambil T</dt>
                                    <dd><?php echo $data->serah2;?></dd>

                                    <dt class="text-upper">Keadaan Istri</dt>
                                    <dd><?php $k = $data->keadaan_istri ;
                                        if($k==1){
                                            echo "Suci";
                                        }elseif($k==2){
                                            echo "Haid";
                                        }elseif($k==3){
                                            echo "Hamil";    
                                        }else{
                                            echo "Tidak Diketahui";
                                        };?>
                                    </dd>

                                    <!-- 1.sodium_i 
                                    2. haid 
                                    3. hamil 
                                    4. tidak diketahui -->
                                </dl>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 clear-mrg">
                                <h2 class="title-thin text-muted">Lainnya</h2>

                                <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                     aria-valuemax="10">
                                    <strong class="progress-title">Hukum</strong>
                                    <span class="progress-text text-muted"><?php echo $data->hukum;?></span>
                                </div>

                                <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="8" aria-valuemin="0"
                                     aria-valuemax="10">
                                    <strong class="progress-title">Status</strong>
                                    <span class="progress-text text-muted"><?php $l=$data->qobla_bada;
                                    if($l==1){
                                        echo "Ba'da";
                                    }else{
                                        echo "Qobla";
                                    }?></span>
                                </div>

                                <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="7" aria-valuemin="0"
                                     aria-valuemax="10">
                                    <strong class="progress-title">Lama Pernikahan</strong>
                                    <span class="progress-text text-muted"><?php echo $data->lama_nikah;?> Tahun</span>
                                </div>

                                <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="7" aria-valuemin="0"
                                     aria-valuemax="10">
                                    <strong class="progress-title">KUA</strong>
                                    <span class="progress-text text-muted"><?php echo $data->kua_tempat_nikah;?></span>
                                </div>
                            </div>


                            <!-- .col-sm-6 -->
                        </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="crt-share-box clearfix">
                                        <button id="btn-share" class="btn btn-share btn-upper"><span
                                                class="crt-icon crt-icon-share-alt"></span>Share
                                        </button>
                                        <script type="text/javascript"
                                                src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5821a6c28931dc81"></script>
                                        <div class="addthis_inline_share_toolbox"></div>
                                    </div>
                                    <!-- .crt-share -->
                                </div>
                            </div>
                        <!-- .row -->
                    </section>
                    <!-- .section -->

                </div>
                <!-- .crt-paper-cont -->
            </div>
            <!-- .crt-paper -->
        </div>
                        <?php
                            }
                        }
                        ?>
                  
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
