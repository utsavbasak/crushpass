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
    <?php 
                                
          $ci =&get_instance();
   		@ $ci->load->model(profession_model);
  		@ $ci->profession_model->random() ;
		$x = 0;
  ?>
              
	<div style="width:100%;"> <!-- Main Div -->
		<div style="float:left; width:50%; ">
			<div>	
				<table>	
                <!-- Profession Buttons -->
				<tr>
                <!--  /*First ONE*/-->
					<td>
						<div class="effect-sadie">
							<image src=<?php echo(base_url().'img/bluebtn.jpg'); ?>>
							<figcaption>	
								<?php $x = 1; include('view_btn.php'); ?>	
                                										
							</figcaption>							
						</div>
					</td>
                    
                  <!--  /*SECOND ONE*/-->
                  
                  <td>
						<div class="effect-sadie">
							<image src=<?php echo(base_url().'img/greenbtn.jpg'); ?>>
							<figcaption>	
                            	<?php $x = 2; include('view_btn.php'); ?>												
							</figcaption>							
						</div>
					</td>                 
                  <!--THIRD ONE-->
                   <td>
						<div class="effect-sadie">
							<image src=<?php echo(base_url().'img/redbtn.jpg'); ?>>
							<figcaption>	
                      <?php $x = 3; include('view_btn.php'); ?>												
							</figcaption>							
						</div>
					</td>
                 
					
				</tr>
				<tr>
					<!--Fourth ONE-->
                   <td>
						<div class="effect-sadie">
							<image src=<?php echo(base_url().'img/purplebtn.jpg'); ?>>
							<figcaption>	
                      <?php $x = 3; include('view_btn.php'); ?>												
							</figcaption>							
						</div>
					</td>
                    <!--5th ONE-->
                   <td>
						<div class="effect-sadie">
							<image src=<?php echo(base_url().'img/redbtn.jpg'); ?>>
							<figcaption>	
                      <?php $x = 3; include('view_btn.php'); ?>												
							</figcaption>							
						</div>
					</td>
                    <!--6th ONE-->
                   <td>
						<div class="effect-sadie">
							<image src=<?php echo(base_url().'img/yellowbtn.jpg'); ?>>
							<figcaption>	
                      <?php $x = 3; include('view_btn.php'); ?>												
							</figcaption>							
						</div>
					</td>
				</tr>
				
			  </table>
			</div><!-- End of Profession Buttons -->
		</div>
        </div>
        </body>
        </html>
        