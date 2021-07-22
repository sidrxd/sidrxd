	<!DOCTYPE html>
	<html>

	<head>
		<title>soEpic Technologies</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

    <!-- Latest compiled and minified CSS -->
    <!-- Optional theme -->
    <link rel="stylesheet" href="form.css" >
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!--webfont-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,800,700' rel='stylesheet' type='text/css'>

		<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 8px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;

  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>

	</head>

	<body>

<header class="site-header site-header__header-one ">
		<?php include 'header.php';?>
		<!---->
</header>
		<!--header-->
	<section class="thm-gray-bg course-category-one">
            <div class="container-fluid text-center">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Gallery <br>
                        </h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
              </div>

            <div class="row">
 
   
    	<?php
					include 'connect.php';
					if (isset($_GET["page"])) {
						$page = $_GET["page"];
					} else {
						$page = 1;
					};
					$start_from = ($page - 1) * 12;
					$sql = "SELECT * FROM tbl_album where status='process' ORDER BY albumid DESC LIMIT $start_from, 12";
					$rs_result = mysql_query($sql, $con);




					####### Fetch Results From Table ########

					while ($row = mysql_fetch_assoc($rs_result)) {
						$aimage = $row['image'];
						$aid = $row['albumid'];
						$aname = $row['name'];
						$astatus = $row['status'];

					?>
						<div class="gallery" 
					style="margin-right:16px;margin-left:16px;margin-top:16px;margin-bottom:16px">
					
							<?php echo " <a href='gallery.php?id=$aid'> <img src='admin/acatch/$aimage'  class='gallery' alt='Pic' alt='$aname'></a>"; ?>
							<?php echo "<a href='gallery.php?id=$aid'>
			   
			    <span class='pic-caption left-to-right'>

			        <p style='color:#000000;font-size:24px'>$aname</p>
			    </span></a>" ?>
						</div>
					<?php } ?>
   



			<div class="clearfix"></div>
	
		</div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.gallery-one -->
	<section class="features18 popup-btn-cards cid-qMUKqgDJ98 mbr-parallax-background" id="features18-7" data-rv-view="201"> 

</section>
		<div class="seeall_div2">
			<!--   NAVIGATION FOR BLOG POST -->
			<div class="blog_navigation">
				<div style="margin-top:20px;margin-left:180px">

					<?php

					$sql = "SELECT COUNT(name) FROM tbl_album";
					$rs_result = mysql_query($sql, $con);
					$row = mysql_fetch_row($rs_result);
					$total_records = $row[0];
					$total_pages = ceil($total_records / 12);
					for ($i = 1; $i <= $total_pages; $i++) {
						echo "<span class='navigations_items_span'>";
						echo "<b>Page </b>";
						echo "<a href='index.php?page=" . $i . "' class='navigation_item selected_navigation_item'>" . $i . "</a>";
						echo "</span>";
					};
					?>


				</div>
			</div>
		</div>
		<!----->

		<!----->
		<div class="footer">

		</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/vegas.min.js"></script>
<script src="form.js"></script>
<!-- template scripts -->
<script src="kipsoassets/js/theme.js"></script>
	</body>

	</html>