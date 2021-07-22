			<!DOCTYPE html>
			<html>

			<head>
				<title>Shashi International School</title>
				<link rel="apple-touch-icon" sizes="180x180" href="kipsoassets/images/favicons/apple-touch-icon.png">
				<link rel="icon" type="image/png" sizes="32x32" href="kipsoassets/images/favicons/favicon-32x32.png">
				<link rel="icon" type="image/png" sizes="16x16" href="kipsoassets/images/favicons/favicon-16x16.png">
				<link rel="manifest" href="kipsoassets/images/favicons/site.webmanifest">

				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
				<!-- plugin scripts -->
				<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="kipsoassets/css/animate.min.css">
				<link rel="stylesheet" href="kipsoassets/css/bootstrap.min.css">
				<link rel="stylesheet" href="kipsoassets/css/owl.carousel.min.css">
				<link rel="stylesheet" href="kipsoassets/css/owl.theme.default.min.css">
				<link rel="stylesheet" href="kipsoassets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
				<link rel="stylesheet" href="kipsoassets/plugins/kipso-icons/style.css">
				<link rel="stylesheet" href="kipsoassets/css/magnific-popup.css">
				<link rel="stylesheet" href="kipsoassets/css/vegas.min.css">

				<!-- template styles -->
				<link rel="stylesheet" href="kipsoassets/css/style.css">
				<link rel="stylesheet" href="kipsoassets/css/responsive.css">

				<!-- Start WOWSlider.com HEAD section -->
				<link rel="stylesheet" type="text/css" href="engine1/style.css" />
				<script type="text/javascript" src="engine1/jquery.js"></script>
				<!-- End WOWSlider.com HEAD section -->

				<!-- Latest compiled and minified CSS -->
				<!-- Optional theme -->
				<link rel="stylesheet" href="form.css" >

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

						transition: width 0.5s,height 0.5s;
					}

					div.gallery:hover {

						width: 20%;
						height:20%;
					}

					div.gallery img {
						width: 100%;
						height: auto;
						transition: width 0.5s,height 0.5s;
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


				<?php include 'header.php';?>
				<!---->
				<section class="inner-banner">
					<div class="container">
						<ul class="list-unstyled thm-breadcrumb">
							<li><a href="#">Home</a></li>
							<li class="active"><a href="#">Gallery</a></li>
						</ul><!-- /.list-unstyled -->
						<h2 class="inner-banner__title">Gallery</h2><!-- /.inner-banner__title -->
					</div><!-- /.container -->
				</section><!-- /.inner-banner -->

				<!--header-->
				<section class="thm-gray-bg course-category-one">

					<div class="container">
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
							$rs_result = mysqli_query($con,$sql);




							####### Fetch Results From Table ########

							while ($row = mysqli_fetch_assoc($rs_result)) {
								$aimage = $row['image'];
								$aid = $row['albumid'];
								$aname = $row['name'];
								$astatus = $row['status'];

								?>
								<div class="col-lg-4 col-md-6" >
									<div class="gallery-one__single" align="center" >


										<div class="container">
											<?php echo " <a  href='gallery.php?id=$aid'> <img src='admin/acatch/$aimage'  class='gallery-one__single' alt='Pic' alt='$aname' style='width: 352px;height: 240px'></a>"; ?>



											<?php echo "
											<a  href='gallery.php?id=$aid' class='bottom-left' style='color:white;font-size:16px;margin:16px;background:#F16101; background-color: rgba(0,0,0, 0.4); border-radius:8px;align:center';>$aname</a>
											</span></a>" ?>
										</div>
									</div>
								</div>
							<?php } ?>




							<div class="clearfix"></div>
						</div>
					</div>

				</section><!-- /.gallery-one -->

				<div class="seeall_div2">
					<!--   NAVIGATION FOR BLOG POST -->
					<div class="blog_navigation">
						<div style="margin-top:20px;margin-left:180px">

							<?php

							$sql = "SELECT COUNT(name) FROM tbl_album";
							$rs_result = mysqli_query($con,$sql);
							$row = mysqli_fetch_row($rs_result);
							$total_records = $row[0];
							$total_pages = ceil($total_records / 12);
							for ($i = 1; $i <= $total_pages; $i++) {
								echo "<span class='navigations_items_span'>";
								echo "<b>Page </b>";
								echo "<a href='sisgallery.php?page=" . $i . "' class='navigation_item selected_navigation_item'>" . $i . "</a>";
								echo "</span>";
							};
							?>


						</div>
					</div>
				</div>
				<!----->

				<!----->

				<?php include 'footer.php';?>


				<script src="kipsoassets/js/jquery.min.js"></script>
				<script src="kipsoassets/js/bootstrap.bundle.min.js"></script>
				<script src="kipsoassets/js/owl.carousel.min.js"></script>
				<script src="kipsoassets/js/waypoints.min.js"></script>
				<script src="kipsoassets/js/jquery.counterup.min.js"></script>
				<script src="kipsoassets/js/TweenMax.min.js"></script>
				<script src="kipsoassets/js/wow.js"></script>
				<script src="kipsoassets/js/jquery.magnific-popup.min.js"></script>
				<script src="kipsoassets/js/countdown.min.js"></script>
				<script src="kipsoassets/js/vegas.min.js"></script>
				<script src="form.js"></script>
				<!-- template scripts -->
				<script src="kipsoassets/js/theme.js"></script>
			</body>

			</html>