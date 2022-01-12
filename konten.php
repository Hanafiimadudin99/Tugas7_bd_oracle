
  <?php 
  include "menu.php";
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard 
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
        <?php 
        include("../admin/koneksi.php");
        $stid = oci_parse($koneksi, 'select count(*) as JUM from pembeli');
        oci_execute($stid);
        $total2 = oci_fetch_array($stid,OCI_BOTH);
        ?>
              <h3><?php echo $total2['JUM'];?></h3>

              <p>Pembeli</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="pembeli.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
        <?php 
        include("../admin/koneksi.php");
        $stid = oci_parse($koneksi, 'select count(*) as JUM from kendaraan');
        oci_execute($stid);
        $total2 = oci_fetch_array($stid,OCI_BOTH);
        ?>
              <h3><?php echo $total2['JUM'];?></h3>

              <p>Kelapa</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="kelapa.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
        <?php 
        include("../admin/koneksi.php");
        $stid = oci_parse($koneksi, 'select count(*) as JUM from admin');
        oci_execute($stid);
        $total2 = oci_fetch_array($stid,OCI_BOTH);
        ?>
              <h3><?= $total2['JUM'];?></h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
        <?php 
        include("../admin/koneksi.php");
        $stid = oci_parse($koneksi, 'select count(*) as JUM from transaksi');
        oci_execute($stid);
        $total2 = oci_fetch_array($stid,OCI_BOTH);
        ?>
              <h3><?= $total2['JUM'];?></h3>

              <p>Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="transaksi.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="#">
            
            <div class="#">
              
            </div>
          </div>
          

          <!-- Chat box -->
          <div class="#">
            <div class="#">
             
            <div class="#">
              <!-- chat item -->
              <div class="item">
               
                <div class="attachment">
                 
              </div>
              <!-- /.item -->
              <!-- chat item -->
              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                
              </div>
              <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class="#">
              <div class="input-group">


              </div>
            </div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="#">
            <div class="#">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
              </ul>
            </div>
            
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
          <div class="#">
            <div class="#">
             
            </div>
            <div class="box-body">
              
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="#">
            <div class="#">
             
            </div>
            
            <div class="#">
              <div class="#">
                
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  
                </div>
                <!-- ./col -->
                <div class="#">
                 
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
          <div class="#">
            <div class="#">
             
              <div class="box-tools pull-right">
               
            </div>
            <div class="#">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
            <div class="#">
            
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- Calendar -->
          <div class="#">
            <div class="#">
              
              <div class="#">
               
              </div>
              <!-- /. tools -->
            </div>
            
            <div class="#">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="#">
                  
                  </div>
                  
                  <div class="#">
                  
                  </div>
                  
                <div class="#">
                
                  
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->