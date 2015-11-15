<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo($title); ?></title>
</head>
<body>
	<h1><?php echo($heading); ?></h1>
	<?php if($queries->num_rows()>0): ?>	
		<?php foreach($queries->result() as $row): ?>
		<h3><?=$row->body?></h3>
		<p><?=$row->author?></p>
		<hr>
		<?php endforeach; ?>
	<?php endif; ?>
	<p><?=anchor('Blog','Back to Blog');?></p>
	<?=form_open('Blog/comment_insert');?>
	
	<textarea rows="10" name="body"></textarea><br>
	<input type="text" name="author"/>
	<input type="submit" value="Submit Comment"/>
</body>
</html>