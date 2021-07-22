<?php session_start();


if(isset($_SESSION['uname']))
{
    ?>
    <?php include "header1.php"; ?>
    <?php include "menu/docmenu2.php"; ?>
    <style>.navigation_item{
      padding: 0px 5px;
      background: #fff;
      text-decoration: none;

      color: #e3e3e3 !important;
      font-size: 12px;
      border: 2px solid #e3e3e3;
      border-radius: 1px;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
  }
  .navigation_item:hover,.selected_navigation_item{
      border: 2px solid #2A6496;
      border-radius: 2px;
      color: #2A6496 !important;
      background: #fff;
  }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SIS Docs</h1>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    SIS Control panel
                </div>
                <?php 

                include "filesLogic.php"

                ;?>

                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Filename</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>

                    <?php
                    $conn = mysqli_connect("localhost","sramphar_admin","monikasingh29","sramphar_dotcode");

                    $sql = "SELECT * FROM tbl_doc";
                    $result = mysqli_query($conn, $sql);
                    while ($file = mysqli_fetch_assoc($result)) {
                        ?>

                        <tbody>
                            <tr>
                              <td><?php echo $file['docid']; ?></td>
                              <td><a href="docupload/<?php echo $file['docname'] ?>"><?php echo $file['docname']; ?></td>
                                  <td><?php echo $file['docdesc']; ?></td>
                                
                                  <td><a href="docdelete.php?file_id=<?php echo $file['docid'] ?>">Delete</a></td>
                              </tr>

                          </tbody>

                          <?php
                      };
                      ?>

                  </table>

                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- jQuery Version 1.11.0 -->
  <script src="js/jquery-1.11.0.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
  <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="js/sb-admin-2.js"></script>

  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>
<?php
}
else
{
    header("location:login.php");
}
?>
</body>

</html>
