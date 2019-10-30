<div id="page-wrapper">

  <!-- <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Modal </h1>
      </div>
  </div> -->

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

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah Komik</button>

          <hr>

          <div class="panel panel-primary">
              <div class="panel-heading">
                  <i class="fa fa-table"></i> Data Komik
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Genre</th>
                              <th>Gambar</th>
                              <th>Judul</th>
                              <th>Sinopsis</th>
                              <th>Tanggal</th>
                              <th>Status</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no=1; 
                          foreach($all as $row): ?>
                          <tr class="odd gradeX">
                            
                              <td><?php echo $row->komik_id; ?></td>
                              <td><?php echo $row->genre_id; ?></td>
                              <td><?php echo $row->gambar; ?></td>
                              <td><?php echo $row->judul; ?></td>
                              <td><?php echo $row->synopsis; ?></td>
                              <td><?php echo $row->tanggal_buat; ?></td>
                              <td><?php echo $row->status; ?></td>
                              <td>
                                  <center>
                                    <div class="tooltip-demo">
                                      <a data-toggle="modal" data-target="#modal-chapter<?=$row->komik_id;?>" class="btn btn-success btn-circle" data-popup="tooltip" data-placement="top" title="Tambah Chapter"><i class="fa fa-plus"></i></a>
                                      <a data-toggle="modal" data-target="#modal-edit<?=$row->komik_id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Komik"><i class="fa fa-pencil"></i></a>
                                      <a href="<?php echo site_url('data/hapus/'.$row->komik_id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->komik_id;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Komik"><i class="fa fa-trash"></i></a>
                                    </div>
                                  </center>
                              </td>
                          </tr>
                          <?php endforeach; ?>
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
  <div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Komik</h4>
        </div>
        <div class="modal-body">
        <!-- body -->
            <?php
                echo form_open_multipart('komik/add', 'role="form" class="form-horizontal"');
            ?>
              <div class="form-group">
                <div class="col-sm-12">
                  <label>Genre ID</label><br>
                  <input type="text" name="genre_id" required placeholder="Genre ID" id="form-field-1" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <label>Gambar</label><br>
                  <input type="text" name="gambar" required placeholder="Link Gambar" id="form-field-1" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <label>Judul</label><br>
                  <input type="text" name="judul" required placeholder="Judul Komik" id="form-field-1" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <label>Sinopsis</label><br>
                  <input type="text" name="synopsis" required placeholder="Sinopsis" id="form-field-1" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <label>Tanggal Buat</label><br>
                  <input type="date" name="tanggal_buat" required id="form-field-1" class="form-control">
                </div>
                <div class="col-sm-6">
                  <label>Status</label><br>
                  <input type="text" name="status" required placeholder="Status" id="form-field-1" class="form-control">
                </div>
              </div>
          <!-- end body -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
  </div>    
</div>
<!-- end modal tambah -->
<!-- /#page-wrapper --> 

<?php $no=0; 
foreach($all as $row): $no++; ?>
<div class="row">
  <div id="modal-chapter<?=$row->komik_id;?>" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Chapter : <?=$row->judul;?></h4>
        </div>
        <div class="modal-body">
        <!-- isinya -->
          <?php
                echo form_open_multipart('komik/add_chapter', 'role="form" class="form-horizontal"');
          ?>
            <div class="form-group">
                <div class="col-sm-12">
                  <!-- <label>Komik ID</label><br> -->
                  <input type="hidden" readonly value="<?=$row->komik_id;?>" name="komik_id" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                  <label>Chapter Ke</label><br>
                  <input type="text" required placeholder="Chapter ke -" name="chapter_ke" class="form-control" >
                </div>
                <div class="col-sm-6">
                  <label>Genre ID</label><br>
                  <input type="date" required name="tanggal_posting" class="form-control" >
                </div>
            </div>
            <div class="form-group">
               
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                  <label>Link Gambar</label><br>
                  <input type="text" required placeholder="Link Gambar" name="gambar" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                  <label>Judul Chapter</label><br>
                  <input type="text" required placeholder="Judul Chapter"" name="judul_chapter" class="form-control" >
                </div>
            </div>
            

          <!-- end isi modal -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
  </div>
</div>
<?php endforeach; ?>

<?php $no=0; 
foreach($all as $row): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$row->komik_id;?>" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
<?php endforeach; ?>
