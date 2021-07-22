
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login : Shashiedu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body">

    <!-- Log In page -->
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3 mt-5">Admin Panel</h4>
                                <p class="text-muted mb-0">Sign in to continue</p>  
                            </div> <!--end auth-logo-text-->  

                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $myuser = $_POST['username'];
                                $mypass= $_POST['password'];
                                if ($myuser == '' || $mypass == '') {
                                    echo " <div class='alert alert-danger'>Enter username or password</div>";

                                }
                                else{
                                    include "connect.php";
                                    $result = mysqli_query($con ,"SELECT * FROM tbl_login where username = '$myuser' and password='$mypass'");
                                            //echo "Returned rows are: " . mysqli_num_rows($result);
                                    if (mysqli_num_rows($result)>0)
                                    {
                                       $row = mysqli_fetch_array($result);
                                       echo " <div class='alert alert-danger'>Your username or password is incorrect</div>";

                                       if ($row[3]=='admin')
                                        $_SESSION['uname']=$myuser;
                                    echo "<script>location.href='home.php'</script>";
                                }else{
                                  echo " <div class='alert alert-danger'>Your username or password is incorrect</div>";
                                  echo ""; 

                              }
                          }
                      }
                      ?>     

                      <form class="form-horizontal auth-form my-4" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group mb-3">
                                <span class="auth-form-icon">
                                    <i class="dripicons-user"></i> 
                                </span>                                                                                                              
                                <input type="text" class="form-control" placeholder="Username" name="username" type="username" autofocus>
                            </div>                                    
                        </div><!--end form-group--> 

                        <div class="form-group">
                            <label for="userpassword">Password</label>                                            
                            <div class="input-group mb-3"> 
                                <span class="auth-form-icon">
                                    <i class="dripicons-lock"></i> 
                                </span>                                                       
                                <input type="password" class="form-control"  placeholder="Password" name="password" type="password" value="">
                            </div>                               
                        </div><!--end form-group--> 

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-2">
                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                            </div><!--end col--> 
                        </div> <!--end form-group-->      


                    </form><!--end form-->
                </div><!--end /div-->

            </div><!--end card-body-->
        </div><!--end card-->

    </div><!--end auth-page-->
</div><!--end col-->           
</div><!--end row-->
<!-- End Log In page -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>