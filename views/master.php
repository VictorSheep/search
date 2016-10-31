<html>
    <head>
	    <meta charset="UTF-8">
		<title>PHP exo</title>
    	<link rel="stylesheet" href="/asset/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="/asset/css/style.css">
    </head>
    <body>
    <nav>
    	<ul class="nav nav-tabs">
    		<?php foreach ($categories as $category) : ?>
    			<li><a role="presentation" href="/index.php/category?id=<?php echo $category['id'] ?>">
    				<?php echo $category['title'] ?>
    			</a></li>
    		<?php  endforeach ?>
    	</ul>
    </nav>
        <?php echo $content;  ?>
    </body>
</html>