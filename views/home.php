<?php ob_start(); ?>
<div class="row">
	<div class="col-md-7">
		<!-- Liste des articles -->
		<?php foreach ($challenges as $chall):?>
			<article>
				<h2>
					<a href="/index.php/chall?id=<?php echo $chall['id'] ?>&amp;nb=2">
						<?php echo $chall['name']; ?>
					</a>
				</h2>
				<p>
					<br>
					<a href="/index.php/chall?id=<?php echo $chall['id'] ?>&amp;nb=2">
						voir comme c'est beau...
					</a>
				</p>
			</article>
		<?php endforeach ?>
	</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'master.php'; ?>