<!DOCTYPE HTML>
<html>
<head>	
<body>

<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header ">
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
                    <li class="dropdown"> <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <image src=<?php echo(base_url().'img/notification.jpg'); ?>  height="25" width="25"><span class="caret"></span> </a>
                    
                    <ul class="dropdown-menu" role="menu">
	            <li><?php include_once('notification_view.php'); ?></li>
	          </ul>
                    <li> <a href="#"> <?php echo $this->session->userdata('name'); ?></a><li>
                    <?php if($this->session->userdata('admin'))
							{ ?>
                            <li><a href=<?php echo(base_url().'index.php/login/admin'); ?>> <img src=<?php echo(base_url().'img/admin_pannel.jpg'); ?>  height="25" width="25"></a></li>
					<?php		}
					?>
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
      </head>
      