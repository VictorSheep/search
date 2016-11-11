<?php ob_start(); ?>
<?php include 'chall_title.php'; ?>

<div class="row">
  <div class="col-md-12">
    <svg width="900" height="900">
      <?php $wh = 900/$size; ?>
      <?php for ($i=0; $i < $size; $i++): ?>
        <?php $x= $wh*$i ; ?>
        <?php for ($j=0; $j < $size; $j++): ?>
          <?php $y= $wh*$j ; ?>
          <?php $color = ($data_table[$i][$j]=="#")? "#733D3C": "#F3C4A8"; ?>
          <rect x=<?php echo $x ?> y=<?php echo $y ?> width=<?php echo $wh ?> height=<?php echo $wh ?> fill=<?php echo $color ?> />
        <?php endfor ?>
      <?php endfor ?>
    </svg>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'master.php'; ?>