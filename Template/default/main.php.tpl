<div class="conteiner">
	<div class="row">
		<h1>Hello World</h1>
		<form method="POST">
		<input type="text" name="name"><br>
		<input type="text" name="surname"><br>
		<input type="text" name="email"><br><br>
		<input type="submit" name="add"><br>
	</form>
	<? if(isset($post)) : ?>
		<? foreach ($post as $item) : ?>
			<h2>
				<p><?=$item['name'];?></p>
			</h2>
			<p>
				<?=$item['surname'];?>
			</p>
			<p>
				<?=$item['email'];?>
			</p>
		<? endforeach; ?>
	<? endif; ?>
	</div>
</div>