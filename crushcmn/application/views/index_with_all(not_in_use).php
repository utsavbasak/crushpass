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
<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">crUshpass</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">It's Complicated <span class="sr-only">(current)</span></a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Interests <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Add Intrests</a></li>
	            <li><a href="#">Remove Interests</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Forums <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Front Page</a></li>
	            <li><a href="#">Selected Forums</a></li>
	          </ul>
	        </li>
	      </ul>
	      <?php if($this->session->userdata('is_logged_in'))
		  		{
					?>
                    <ul class="nav navbar-nav navbar-right">
                    <li> <a href="#"> <?php echo $this->session->userdata('name'); ?></a><li>
	        <li><a href=<?php echo(base_url().'index.php/login/signout'); ?>>Sign Out </a></li>
	      </ul>
                    
			<?php
					
				}
				else
				{
					?>
					<ul class="nav navbar-nav navbar-right">
	        <li><a href=<?php echo(base_url().'index.php/login/signin'); ?>>Sign In   <i class="fa fa-sign-in fa-1g"></i></a></li>
	      </ul>
			<?php
				}
			?>
	      
	    </div>
	  </div>
	</nav>
    <?php 
                                
          $ci =&get_instance();
   		@ $ci->load->model(profession_model);
  		@ $ci->profession_model->random() 
  ?>
              
	<div style="width:100%;"> <!-- Main Div -->
		<div style="float:left; width:50%; ">
			<div>
				<table><!-- Profession Buttons -->
				<tr>
					<td>
						<div class="effect-sadie">
							<image src=<?php echo(base_url().'img/bluebtn.jpg'); ?>>
							<figcaption>	
                            				
								<h2><a href=<?php echo(base_url().'index.php/profession/index'); ?> style="text-align: center;"><?php 
                                
                                $ci =&get_instance();
   @ $ci->load->model(profession_model);
  @ $ci->profession_model->random1_profession() ?>  </a></h2>
								<form action= <?php echo(base_url().'index.php/profession/like'); ?>>
                                <button style="color:red;"><image src=<?php echo(base_url().'img/heartbreak.svg'); ?>  class="buttonnew"/><?php 
                                
                                $ci =&get_instance();
   @ $ci->load->model(profession_model);
  @ $ci->profession_model->random1_like() ?>
                                </button>	
                               </form>				
							</figcaption>							
						</div>
					</td>
                 
					<td><a href="#" class="btn1 green">Green Button</a></td>
					<td><a href="#" class="btn1 red">Red Button</a></td>
				</tr>
				<tr>
					<td><a href="#" class="btn1 purple">Purple Button</a></td>
					<td><a href="#" class="btn1 orange">Orange Button</a></td>
					<td><a href="#" class="btn1 yellow">Yellow Button</a></td>
				</tr>
				<tr>
					<td><a href="#"><div class="shuffle"></div></a></td>
					<td><div></div></td>
					<td><a href="#"><div class="list"></div></a></td>
				</tr>
				</table>
			</div><!-- End of Profession Buttons -->
		</div>
		<div id="main1" style="float:right; width:50%;">
		  <h2 style="padding: 5px;"><a href="#">Captain America Kicks Ass!</a></h2>
			<a style="padding: 5px;" href="#" class="post-thumbnail"><a style="padding: 5px;" href="#" class="post-thumbnail"><img src="<?php echo(base_url().'img/temp-post-thumbnail1.png'); ?>" alt="Read the full post" /></a></a>
			<p style="padding: 5px;">Lorizzle ipsum dolor sizzle ghetto, consectetuer fizzle elit. Sheezy doggy velizzle, i saw beyonces tizzles and my pizzle went crizzle volutpizzle, suscipit cool, own yo' vizzle, arcu. Pellentesque eget phat. My shizz erizzle. For sure izzle dolizzle for sure turpis tempizzle sizzle. Maurizzle i saw beyonces tizzles and my pizzle went crizzle nibh et turpizzle. Bizzle izzle i saw beyonces tizzles and my pizzle went crizzle. Pellentesque eleifend pot nisi. In hac habitasse platea dictumst. Pimpin' dapibizzle. Cool tellus owned, pretizzle eu, mattis uhuh ... yih!, eleifend dang, nunc. Ma nizzle suscipizzle. Integizzle shizzlin dizzle away sizzle purus. Mammasay mammasa mamma oo sa at dope. Yo mamma erizzle. condimentizzle, turpizzle nizzle congue consectetuer, brizzle libero bling bling fizzle, sizzle ullamcorper sure for sure nizzle sizzle. </p> 
			<div class="post-info">
				<ul>
					<li class="date">18th August 2011</li>
					<li class="category">Posted in <a href="#">Reviews</a></li>
					<li class="read-more"><a href="#">Read more</a></li>
				</ul>
			</div>
			<div class="pagination" style="width:100%;">
			<p class="prev"><a href="#">Older articles</a></p>
			<p class="next"><a href="#">Newer articles</a></p>
			</div> 
		</div>
		<hr style="border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
		<hr style="border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
	</div>
	<div class="clear" style="width: auto;">
	</div>
	<div class="lowdiv"style="margin:20px; padding-bottom: 20px;">
	<h1  style="margin:20px; padding: 0px;">It has been arranged!</h1>
	<table width="100%" style="width=100%; ">
	<tr>
	<td style="width: 25%;"><a href="#" class="btn2 blue">Button</a></td>
	<td style="width: 25%;"><a href="#" class="btn2 green">Button</a></td>
	<td style="width: 25%;"><a href="#" class="btn2 red">Button</a></td>
	<td style="width: 25%;"></td>
	</tr>
	<tr>
	<td style="width: 2%;"></td>
	<td style="width: 25%;"><a href="#" class="btn2 purple">Button</a></td>
	<td style="width: 25%;"><a href="#" class="btn2 orange">Button</a></td>
	<td style="width: 25%;"><a href="#" class="btn2 yellow">Button</a></td>
	</tr>
	</table>
	</div>
	<hr style="border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
	<hr style="border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">

	<div class="lowdiv"style="margin:20px; padding-bottom: 20px;">
	<h1  style="margin:20px; padding: 0px;">F$%k This Shit, I am a rebel!</h1>
	<table width="100%" align="center">
	<tr>
	<td style="width: 33%; align="center"><div align="center"><a href="#" class="btn2 blue">Button</a></div></td>
	<td style="width: 33%; align="center"><div align="center"><a href="#" class="btn2 green">Button</a></div></td>
	<td style="width: 33%; align="center"><div align="center"><a href="#" class="btn2 red">Button</a></div></td>
	</tr>
	</table>
	</div>
	<hr style="border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
	<hr style="border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
	<h4> Terms & Conditions </h4> <h4> Site Map </h4> <h4> Policy </h4>