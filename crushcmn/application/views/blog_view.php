<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo($title); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
	    $(".comment_button").click(function(){
	        $(this).next(".comment_body").toggle(500);
	    });
	});
	</script>
</head>
<body>
	<h1><?php echo($heading); ?></h1>
	<?php foreach($blog_queries->result() as $blog_row): ?>
		<h3><?=$blog_row->title?></h3>
		<p><?=$blog_row->body?></p>
		<hr>
		<input type="button" class="comment_button" value="Comments"/> 
		<div class="comment_body" hidden="true">
		<?php $query=$this->db->query('Select comments.body,author.name from comments INNER JOIN author on comments.author_id=author.id WHERE comments.entry_id='.$blog_row->id); ?>	
			<?php if($query->num_rows()>0): ?>
				<?php foreach($query->result() as $comment_row): ?>
				<h3><?=$comment_row->body?></h3>
					<?=$comment_row->name?></p>
				<hr>
				<?php endforeach; ?>
			<?php endif; ?>
			<?=form_open('Blog/comment_insert');?>
			<?=form_hidden('entry_id',$blog_row->id);?>
				<input type="hidden" name="author_id" value="<?php echo($a_id); ?>"/>
				<p>Enter Comment</p>
				<textarea rows="10" name="body"></textarea><br>
				<input type="submit" value="Submit Comment"/>
			<?php echo('</form>'); ?>
		</div>
	<?php endforeach; ?>
</body>
</html>