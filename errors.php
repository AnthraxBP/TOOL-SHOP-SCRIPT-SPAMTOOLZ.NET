<?php  if (count($errors) > 0) : ?>
	<center>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><font color="red"><b><?php echo $error ?></b></p></font>
		<?php endforeach ?>
	</div>
	</center>
<?php  endif ?>
