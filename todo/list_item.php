<li>
	<article>
		<h1><?php echo $task['title']; ?></h1>
		<p><?php echo $task['content']; ?></p>
		<form action="" method="post" style="display:inline-block;">
			<input type="hidden" name="del" value="<?php echo $index; ?>" />
			<input type="submit" value="x" /> 
		</form>
	</article>
</li>