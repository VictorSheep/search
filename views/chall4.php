<?php ob_start(); ?>
<?php include 'chall_title.php'; ?>
<div class="row">
  <div class="col-md-2">
    <form method="POST" action="/index.php/single?id=4">
      <div class="form-group">
        <label for="number">Nombre</label>
        <input name="number" type="number" class="form-control" id="number" placeholder="Number" value="<?php echo $nb?? '' ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="col-md-10">
    <h4>
      <?php echo isset($result_table)? join(" - ",$result_table):'' ; ?>
    </h4>

    <!-- Affichage erreur -->
    <?php if (!empty($_SESSION['error'])):?>
    <div class="alert alert-warning">
      <strong>Attention!</strong>
      <?php echo $_SESSION['error'] ?>
    </div>
    <?php endif ?>

  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <svg width="1200" height="600" style="background-color:#8F7361">

    <?php if (empty($_SESSION['error'])): ?>

      <?php for ($i=0; $i < count($result_table); $i++): ?>
        <?php $cx= 1100/count($result_table)*$i+50 ; ?>
        <?php $cy= (500/max($result_table)*$result_table[$i]-550)*(-1) ; ?>

        <circle cx=<?php echo $cx ?> cy= <?php echo $cy ?> r=4  fill="#FFF" />

        <?php if (!empty($cy_p)):?>
          <line x1=<?php echo $cx_p ?> y1=<?php echo $cy_p ?> x2=<?php echo $cx ?> y2=<?php echo $cy ?> style="stroke:#FFF;stroke-width:1" />
        <?php endif ?>

        <?php $cx_p= $cx ; ?>
        <?php $cy_p= $cy ; ?>
      <?php endfor ?>
      
    <?php endif ?>

    </svg>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'master.php'; ?>