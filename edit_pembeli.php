<!DOCTYPE html>
<html>
<head>

  <?php 
  include "header.php"; 
  include "menu.php";
  ?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Edit Pembeli
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Edit Pembeli</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

            <?php
      include '../admin/koneksi.php';
      $ID_PEMBELI = $_GET['ID_PEMBELI'];
      $stid = oci_parse($koneksi, "SELECT * FROM pembeli WHERE ID_PEMBELI='$ID_PEMBELI'");
      oci_execute($stid);
      $d = oci_fetch_array ($stid, OCI_BOTH)
      ?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Pembeli</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="update_pembeli.php" enctype="multiple/form-data" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pembeli</label>
                  <input type="hidden" name="ID_PEMBELI" value="<?= $d['ID_PEMBELI']; ?>">
                  <input type="nama" name="NAMA_PEMBELI" value="<?= $d['NAMA_PEMBELI']; ?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="alamat" name="ALAMAT" value="<?= $d['ALAMAT']; ?>" class="form-control" >
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="pembeli.php" ><i class=""></i>kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

          <!-- Input addon -->
          <div class="">
            <div class="">
              
            </div>
            <div class="">
              <div class="">
               
              </div>
              <br>

              <div class="">
                
              </div>
              <br>

              <div class="">
               
              </div>


              <div class="">
                
              </div>
              <br>

              <div class="">
               
              </div>
              <br>

              <div class="">
               
              </div>


              <div class="">
                <div class="">
                  <div class="">
                      
                  
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="">
                  <div class="">
                        
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->
              <div class="">
            
              </div>
           

              <div class="">
               
             
              </div>
             
              <div class="">
                
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="">
          <!-- Horizontal Form -->
          <div class="">
            
            <form class="">
              <div class="">
                <div class="">
                 

                  <div class="">
                    
                  </div>
                </div>
                <div class="">
                

                  
                </div>
                <div class="">
                  <div class="">
                    <div class="">
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="">
                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="">
            <div class="">
             
            </div>
            <!-- /.box-header -->
            <div class="">
            
                <div class="">
                 
                </div>
                

                <!-- textarea -->
                <div class="">
                
                </div>
                <div class="">
                 
                </div>

                <!-- input states -->
                <div class="">
                  
                </div>
                <div class="">
                  
                </div>
                <div class="">
                  
                </div>

                <!-- checkbox -->
                <div class="">
                  <div class="">
                    
                  </div>

                  <div class="">
                   
                  </div>

                  <div class="">
                    
                </div>

                <!-- radio -->
                <div class="">
                  <div class="">
                    
                  </div>
                  <div class="">
                    
                  </div>
                  <div class="">
                    
                  </div>
                </div>

                <!-- select -->
                <div class="">
                  
                </div>
                <div class="">
                  
                </div>

                <!-- Select multiple-->
                <div class="">
                 
                </div>
                <div class="">
                
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</body>
</html>
