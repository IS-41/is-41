<div class="conteiner">
	<div class="row">
		<h1>Hello World</h1>
		<? if(isset($text)) :?>
		<? foreach($text as $item) :?>
			<h2>
				<a href="index.php? id=<?=$item['id'];?>"><?=$item['title']?></a>
			</h2>
			
			<p>
				<?=$item['discription'] ;?>
			</p>
		<?endforeach;?>
	<?endif;?>
	</div>
</div>