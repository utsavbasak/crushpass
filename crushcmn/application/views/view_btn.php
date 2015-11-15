      			
 <!--select profession randomnly by calling random function -->
	
								<h2><a href=<?php echo(base_url().'index.php/profession/index'); ?> style="text-align: center;"><?php 
   $ci =&get_instance();
   		@ $ci->load->model(profession_model);                           
  @ $ci->profession_model->random1_profession() ?>  </a></h2>
 <!-- Logic For Like..check 1st session is on or not...if on then rest of the logic can be applied  -->
<!-- If session is on -->
<?php 

if($this->session->userdata('is_logged_in')){
				if($ci->profession_model->random1_checklike()) //checking liking for this profession
				{ ?>
                	
           			 <button style="color:red;"><image src=<?php echo(base_url().'img/heart.png'); ?>  class="buttonnew"/><?php 
					@$ci->profession_model->random1_like(0) ?>
             		</button>	
             		
						
			<?php	}
				else   //NO liking
				{ ?>
                	<form action= <?php echo(base_url().'index.php/profession/like1'); ?>>
           		 <button style="color:red;"><image src=<?php echo(base_url().'img/heartbreak.svg'); ?>  class="buttonnew"/><?php 
            	@$ci->profession_model->random1_like(1)
				 ?>
              	</button>	
             	</form>
                
				<?php }
			
			 ?>
			
<!-- If session is off -->

     <?php } else{ ?> 
	 	<form action= <?php echo(base_url().'index.php/login/signin'); ?>>
          <button style="color:red;"><image src=<?php echo(base_url().'img/heartbreak.svg'); ?>  class="buttonnew"/><?php               			@ $ci->profession_model->random1_like(2) ?>
           </button>	
           </form>
	 <?php }?>