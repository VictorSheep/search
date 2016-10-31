<?php ob_start(); ?>
<div>
	<nav>
		<a href="/">Acceuil</a>
	</nav>
	<h2>
		<?php echo $article['title']; ?>
	</h2>
	<hr/>
	<p>
		<?php echo $article['content']; ?>
	</p>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'master.php'; ?>