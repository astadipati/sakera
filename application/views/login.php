<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <title><?php echo $judul; ?></title> -->
      <link rel="icon" href="<?php echo base_url('assets/img/icon_pa.ico');?>" type="image/gif">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.css');?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.css');?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/vendor/morrisjs/morris.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

</head>

<body> 
            <br>
            <center>
            <img src="../assets/img/logo_sakera.jpg" align="center" style="border-radius: 100em;border: 1px solid rgb(8, 153, 117);box-shadow: 1px 1px 1px 4px rgb(255, 255, 255);padding: 1px;">
            </center>
<div id="wrapper">
<!-- mulai ngoding disini -->
    <div class="main-login col-sm-4 col-sm-offset-4">        
    <div class="box-login">

            <h3 align="center"><b>Sakera</b></h3>
            <h4 align="center">Sistem Validasi Akta Cerai</h4>
           <!--  <p align="center">
                masukkan username dan password anda
            </p> -->
           
            <?php echo form_open('auth/chek_login', 'class="form-login"')?>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" required class="form-control" name="username" placeholder="Username">
                            <i class=""></i>
                        </span>
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" required class="form-control password" name="password" placeholder="Password">
                            <i class=""></i>
                            <a class="forgot" href="#">
                                
                            </a>
                        </span>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-bricky pull-right btn-success">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>


    </div>
    <!-- /#wrapper -->
            <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
<br>
					<p>Tim IT PTA Surabaya</p>
					<p class="h6">2019 &copy All right Reversed.<a class="text-green ml-2" href="http://pta-surabaya.go.id" target="_blank"> pta-surabaya.go.id</a></p>
				</div>
				</hr>
			</div>	
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/vendor/raphael/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/morrisjs/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/morris-data.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/sb-admin-2.js');?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js');?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script type="text/javascript">
    $('#notifikasi').slideDown('slow').delay(5000).slideUp('slow');
    </script>

    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-popup=tooltip]",
        container: "body"
    })
    </script>

</body>

</html>
