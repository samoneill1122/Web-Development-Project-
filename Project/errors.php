<?php if(count($errors) > 0 && isset($_POST['reg_user'])) : ?>
<div>
	<?php foreach($errors as $error) : ?>
		<p><?php echo $error ?></p>
	<?php endforeach ?>
</div>
<?php endif ?>