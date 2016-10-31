<?php ob_start(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php foreach ($posts as $post):?>
				<article>
					<h2>
						<a href="/index.php/single?id=<?php echo $post['id'] ?>">
							<?php echo $post['title']; ?>
						</a>
					</h2>
					<p>
						<?php echo $post['excerpt'] ?>
						<br>
						<a href="/index.php/single?id=<?php echo $post['id'] ?>">
							lire la suite...
						</a>
					</p>
				</article>
			<?php endforeach ?>
		</div>
		<div class="col-md-6">
			<?php foreach ($authors as $author):?>
				<article>
					<h4>
						<a href="/index.php/single?id=<?php echo $author['id'] ?>">
							<?php echo $author['name']; ?>
						</a>
					</h4>
				</article>
			<?php endforeach ?>
		</div>
	</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'master.php'; ?>