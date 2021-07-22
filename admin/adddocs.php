    <?php session_start();
    if(isset($_SESSION['uname']))
    {
        ?>
        <?php include "header1.php"; ?>
        <?php include "menu/docmenu1.php"; ?>

        <?php
        include"connect.php";
        ?>
        
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Documents</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <?php include "fileslogic.php";?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill below fields to add document
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <form action="adddocs.php" method='post' enctype="multipart/form-data">
                                      Description of File: <input type="text" name="description_entered"/><br><br>
                                      <input type="file" name="myfile"/><br><br>
                                      
                                      <input type="submit" class="btn btn-primary" name="save" value="Upload"/>

                                  </form>
                              </div></div></div>
                              



                              <!-- jQuery Version 1.11.0 -->
                              <script src="js/jquery-1.11.0.js"></script>

                              <!-- Bootstrap Core JavaScript -->
                              <script src="js/bootstrap.min.js"></script>

                              <!-- Metis Menu Plugin JavaScript -->
                              <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

                              <!-- Custom Theme JavaScript -->
                              <script src="js/sb-admin-2.js"></script>
                              <?php
                          }
                          else
                          {
                            header("location:login.php");
                        }
                        ?>
                    </body>

                    </html>
