<?php ob_start(); ?>
<?php include 'chall_title.php'; ?>

<div class="row">
  <div class="col-md-2">
    <form method="POST" action="/index.php/single?id=2">
      <div class="form-group">
        <label for="number">Nombre de cercle</label>
        <input name="number" type="number" class="form-control" id="number" placeholder="Number" value="<?php echo $nb?? '' ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="col-md-10" id="wrap">
    <!-- Affichage erreur -->
    <?php if (!empty($_SESSION['error'])):?>

    <div class="alert alert-warning">
      <strong>Attention!</strong>
      <?php echo $_SESSION['error'] ?>
    </div>

    <?php else: ?>

    <svg width="900" height="900">
      <?php $r=900/$nb/2; ?>
      <?php for ($i=0; $i <= $nb; $i++) :?>

        <?php $cx=(900/$nb/2)*($i*2+1); ?>
        <?php for ($j=0; $j <= $nb; $j++) :?>

          <?php $cy=(900/$nb/2)*($j*2+1); ?>
          <circle cx=<?php echo $cx ?> cy= <?php echo $cy ?> r= <?php echo $r ?>  fill="#607E7B" />

        <?php endfor ?>
        
      <?php endfor ?>
    </svg>
    
    <?php endif ?>

  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'master.php'; ?>