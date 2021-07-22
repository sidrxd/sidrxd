			<?php $aid=$_REQUEST['id']; ?>

			<!DOCTYPE html>
			<html lang="en"> 
			<head>

				
				<meta charset="utf-8">
				<title>soEpic Technologies</title>
				<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
				<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
				<!-- Mobile Specific Metas
					================================================== -->
					<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

					<link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />
					

					<!-- The Menu -->
					<link href="stylesheets/styles.css" rel="stylesheet" type="text/css">
					<link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">

					<!-- Optional - Adds useful class to manipulate icon font display -->
					<link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">



				</head>


				<body>



				<!-- Blog Section
					================================================== -->
					<div class="gallery-head">

						<?php  
						include 'connect.php';
						$sql = "SELECT * FROM tbl_album where albumid='$aid'";
						$rs_result = mysql_query ($sql,$con);




			####### Fetch Results From Table ########

						while ($row = mysql_fetch_assoc($rs_result)) 
						{
							$aimage=$row['image'];
							$aname=$row['name'];
							$adesc=$row['adesc'];
							$astatus=$row['status'];

							?>
							<h2 align="center">
								<?php echo "$aname"; ?> 
							</h2>



					</div>
					<div class="gallery-text">

					</div>

					<div class="container">
						<div class="one-whole text-center">

							<p><?php echo "$adesc"; ?></p>
						<?php } ?>
					
						<p style="margin-left:80px">
							<?php  
							include "connect.php";

							$sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
							$num_rows = mysql_num_rows(mysql_query($sql));		
			####### Fetch Results From Table ########

							$result = mysql_query($sql);
							while($row = mysql_fetch_array($result))
							{
								$gimage=$row['gimages'];

								?>	

								<?php	echo "<a href='admin/gupload/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='admin/gcatch/$gimage' class='inline-block' /></a> ";?>			
							<?php } ?>				
						</p>

					</div>			
				</div>
				<div class="clearfix"></div>
			</div>	
		</div>	






				<!-- Bottom Footer Section
					================================================== -->
					<div class="bottom_footer_section">
						<div class="container">
							<div class="sixteen columns bottom_line_dev">	

								<br/><br/>		
								<hr style="border:solid 1px;margin-top:0px">
								<br/>
								<br/>
								<br/>
							</div>	

						</div>	
					</div>	


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