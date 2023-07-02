<?php
session_start();

if (isset($_POST['submit_pass']) && $_POST['pass']) {
  $pass = $_POST['pass'];
  if ($pass == "abc123") {
    $_SESSION['password'] = $pass;
  } else {
    echo "<script>";
    echo "alert('Incorrect Pssword')";
    echo "</script>";
  }
}

if (isset($_POST['page_logout'])) {
  unset($_SESSION['password']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Probha Aurora Archive for PHOTO-VIDEO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-collapse sidebar-mini">
  <?php
  if (isset($_SESSION['password'])) {
  ?>
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link">Archive Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link" data-toggle="tooltip" title="Roobon@01749752942">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Probha Aurora PHOTO-VIDEO Archive</h1>
              </div>
              <div class="col-sm-6"></div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- /.card -->

                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr class="bg-blue">
                          <th style="width: 70px">Date</th>
                          <th>Event Name</th>
                          <th>Event Description</th>
                          <th>Local</th>
                          <th>Content info</th>
                          <th></th>
                          <th>With Logo</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg-gradient-light">
                          <td>22-May-2023</td>
                          <td>Rotary Action Hero Training</td>
                          <td></td>
                          <td>
                            <a href="#" data-toggle="tooltip" title="PAARCHIVES-2023/<br>Rotary_ActionHero_Training_22May2023/photos" data-html="true"><i class="fas fa-file-image"></i></a>
                          </td>
                          <td></td>
                          <td><i class="fa fa-cloud"></i></td>
                          <td><i class="fa fa-cloud"></i></td>
                        </tr>
                        <tr class="bg-gradient-light">
                          <td>22-May-2023</td>
                          <td>Rotary Action Hero Training</td>
                          <td></td>
                          <td>
                            <a href="#" data-toggle="tooltip" title="PAARCHIVES-2023/<br>Rotary_ActionHero_Training_22May2023/videos" data-html="true"><i class="fas fa-film"></i></a>
                          </td>
                          <td></td>
                          <td><i class="fa fa-cloud"></i></td>
                          <td><i class="fa fa-cloud"></i></td>
                        </tr>
                        <tr class="bg-gradient-light">
                          <td>06-May-2023</td>
                          <td>Global Action Day</td>
                          <td>Art competition, Paper crafting</td>
                          <td>
                            <a href="#" data-toggle="tooltip" title="PAARCHIVES-2023/<br>GlobalActionDays_06May2023/photos" data-html="true"><i class="fas fa-file-image"></i></a>
                          </td>
                          <td>212 Photos</td>
                          <td>
                            <a target="_blank" href="https://cloud.degoo.com/share/0ZwKML3ywjDauG2Vma0ALQ"><i class="fa fa-cloud"></i></a>
                          </td>
                          <td><i class="fa fa-cloud"></i></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr class="bg-blue">
                          <th>Date</th>
                          <th>Event Name</th>
                          <th>Event Description</th>
                          <th>Local</th>
                          <th>Content info</th>
                          <th></th>
                          <th>With Logo</th>
                        </tr>
                      </tfoot>
                    </table>
                    <form method="post" action="" id="logout_form">
                      <input type="submit" class="btn btn-danger" name="page_logout" value="LOGOUT">
                    </form>
                    <hr>
                    <h3>Information about above table</h3>
                    <ul>
                      <li>You can sort with each column</li>
                      <li>You can search any data using search box in the top right</li>
                      <li><i class="fa fa-cloud"></i> this icon for cloud storage. Active link will take you to the storage area</li>
                      <li><i class="fas fa-film"></i> this icon for video file</li>
                      <li><i class="fas fa-file-image"></i> this icon for image/photo</li>
                      <li>On mouse over these icons <i class="fas fa-file-image"></i>, <i class="fas fa-film"></i> you will get photo/video storage path</li>
                      <li>There is pagination system. It helps to display 10/20 records page page</li>
                      <li>Photo path: PAARCHIVES-2023/Rotary_ActionHero_Training_22May2023/photos. Here 'PAARCHIVES-2023' is our harddisk/ssd/nvme label </li>
                      <li>Menu for copying data or make CSV, Excel, PDF files or print command or displaying control for columns</li>
                    </ul>
                  </div>

                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block"></div>
        <strong>Copyright &copy; 2023-2050
          <a target="_blank" href="https://probhaaurora.com/">Probha Aurora Ltd</a>.</strong>
        All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- Page specific script -->
    <script>
      $(function() {
        $("#example1")
          .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
          })
          .buttons()
          .container()
          .appendTo("#example1_wrapper .col-md-6:eq(0)");
      });
    </script>
    <script>
      $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="tooltip"]').css('color', 'red')
      });
    </script>

  <?php
  } else {
  ?>
    <h1>LOGIN TO PROCEED</h1>
    <form class="form form-inline" method="post" action="" id="login_form">
      <div class="formgroup">
        <input type="password" name="pass" class="form-control" placeholder="*******">
      </div>
      <input type="submit" class="btn btn-primary" name="submit_pass" value="DO SUBMIT">

    </form>
    <span>Password : abc123</span>
    <!-- <div class="alert alert-info">Incorrect Password</div> -->

  <?php
  }
  ?>
</body>

</html>