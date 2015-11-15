<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BlogDemo Blog Creation</title>
	<script type="text/javascript" src="../../plugins/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../../plugins/ckfinder/ckfinder.js"></script>
</head>
<body>
	<h1>Create Blog</h1>
	<h3>Welcome <?php echo($name); ?></h3>
	<?=form_open('Blog/blog_insert');?>
	<p>Enter Title</p>
	<input type="text" name="title"/>
	<p>Enter Content</p>
	<?php echo $this->ckeditor->editor("body","enter text here"); ?>
	<br>
	<input type="hidden" name="author_id" value="<?php echo($a_id); ?>"/>
	<input type="hidden" name="category_id" value="1"/>
	<input type="submit" value="Submit"/>
	<?php echo form_close(); ?>
	<?php echo form_open('Blog/logout'); ?>
		<input type="submit" value="Logout"/>
	<?php echo form_close(); ?>
	<p><?=anchor('Blog','Insert New');?></p>
	<p><?=anchor('Blog/see_blogs/','See Blogs');?></p>
</body>
</html>