				<?php $aid=$_REQUEST['id']; ?>

				<!DOCTYPE html>
				<html lang="en"> 
				<head>

					
					<meta charset="utf-8">
					<title>Shashi International School</title>
					<link rel="apple-touch-icon" sizes="180x180" href="kipsoassets/images/favicons/apple-touch-icon.png">
					<link rel="icon" type="image/png" sizes="32x32" href="kipsoassets/images/favicons/favicon-32x32.png">
					<link rel="icon" type="image/png" sizes="16x16" href="kipsoassets/images/favicons/favicon-16x16.png">
					<link rel="manifest" href="kipsoassets/images/favicons/site.webmanifest">

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
					
					<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

					<link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />


					<style>

						div.gallery {
							width: 100%;
							height: auto;

							-webkit-transition: all .4s ease;
							transition: all .4s ease;

						}

						div.gallery:hover {
							
							text-align: center;
							opacity: 0.8;

							width: 100%;
							height:auto;
						}

						div.gallery img {
							width: 70%;
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
							float: none;
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



					<?php  
					include 'connect.php';
					$sql = "SELECT * FROM tbl_album where albumid='$aid'";
					$rs_result = mysqli_query ($con,$sql);




				####### Fetch Results From Table ########

					while ($row = mysqli_fetch_assoc($rs_result)) 
					{
						$aimage=$row['image'];
						$aname=$row['name'];
						$adesc=$row['adesc'];
						$astatus=$row['status'];

						?>
						<section class="inner-banner">
							<div class="container">
								<ul class="list-unstyled thm-breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active"><a href="#">Gallery</a></li>
								</ul><!-- /.list-unstyled -->
								<h2 class="inner-banner__title"><?php echo "$aname"; ?> </h2><!-- /.inner-banner__title -->
							</div><!-- /.container -->
						</section><!-- /.inner-banner -->
						<section class="thm-gray-bg course-category-one">

							<div class="container">
								<div class="one-whole text-center">

									<p><?php echo "$adesc"; ?></p>
								<?php } ?>
							</div>
							<div class="row" align="center">

								<p style="margin-left:0px">
									<?php  
									include "connect.php";

									$sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
									$num_rows = mysqli_num_rows(mysqli_query($con,$sql));		
				####### Fetch Results From Table ########

									$result = mysqli_query($con,$sql);
									while($row = mysqli_fetch_array($result))
									{
										$gimage=$row['gimages'];

										?>	
										<div class="responsive">
											<div class="gallery" style="margin:20px">

												<?php	echo "<a href='admin/gupload/$gimage' target='_self' class='img litebox' data-litebox-group='group-1'>
												<img src='admin/gcatch/$gimage' class='gallery-one__single' /></a> ";?>	
											</div>
										</div>
									<?php } ?>				
								</p>
							</div>
						</div>


						<div class="clearfix"></div>
					</section>
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


					<!-- Primary Page Layout
						================================================== -->
						<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
						<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
						<script src="litebox-master/assets/js/smoothscroll.min.js" type="text/javascript"></script>
						<script src="litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
						<script src="litebox-master/assets/js/tipsy.min.js" type="text/javascript"></script>
						<script src="litebox-master/assets/js/backbone.js" type="text/javascript"></script>
						<script src="litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>

						<script type="text/javascript">
							$('.litebox').liteBox();
						</script>

				<!-- JavaScript
					================================================== -->
					<script src="js/jquery-main.js" type="text/javascript"></script>
					<script type='text/javascript' src="js/jquery-latest.min.js"></script>
					<script type='text/javascript' src='js/menu_jquery.js'></script>
					<script src="js/car/jquery-1.7.2.min.js" type="text/javascript"></script> <!-- jQuery -->
					<script src="js/car/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
					<script src="js/car/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
					<script src="js/ticker.js" type="text/javascript"></script>
					<script type='text/javascript' src='js/jquery.common.min.js'></script>


					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<script type="text/javascript">
						(function() {
							var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							po.src = '../../apis.google.com/js/platform.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						})();
					</script>



				<!-- End Document
					================================================== -->
				</body>

				</html>