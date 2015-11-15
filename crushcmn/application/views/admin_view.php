<!DOCTYPE HTML>
<html>
<head>	
<title>crUshpass</title>

<script src="<?php echo base_url().'js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script> 
<!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!--<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'font-awesome/css/font-awesome.min.css' ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css' ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/font-awesome.min.css' ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'fonts/font.css' ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/icons.css' ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/lowdiv.css' ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/squares.css' ?>"/>
	
</head>
<body>
<?php include_once('admin_header.php'); ?>
<?php include_once('view_profession.php'); ?>
<?php include_once('blog_first_page.php'); ?>
<div style="width:100%;"> <!-- Main Div -->
<div style="float:left; width:50%; ">

			
				<table><!-- Profession Buttons -->

				</tr> 
					<td height="21"><a href="#"><div class="shuffle"></div></a></td>
				  <td><div></div></td>
                  <td><div></div></td>
					<td><a href="#"><div class="list"></div></a></td>
				</tr>
			  </table>
			</div><!-- End of Profession Buttons -->
            </div>
	       
<?php include_once('view_subject.php'); ?>
<?php include_once('view_sports.php'); ?>
<?php include_once('footer.php'); ?>






	</body>
    </html>
    