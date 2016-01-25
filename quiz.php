

<?php
require_once 'includes/db.php';
list($n_id, $no) = DB::queryFirstList("SELECT nextid, queno FROM nextque");
list($id,$question,$opt1,$opt2,$opt3,$opt4,$ans) = DB::queryFirstList("SELECT * FROM question WHERE id=%s",$n_id);
?>

<div class="container-fluid">
  <div class="row">
        <div class="col-sm-2" style="background-color:yellow;">
        <?php echo $id; ?>
        </div>
        <div class="col-sm-10" style="background-color:yellow;">
        <?php echo $question; ?>
        </div>
  </div>
  <div class="row">
  <div class="col-sm-6" style="background-color:yellow;">
    <?php echo $opt1; ?>
  </div>
  <div class="col-sm-6" style="background-color:yellow;">
    <?php echo $opt2; ?>
  </div>
 </div>
  <div class="row">
  <div class="col-sm-6" style="background-color:yellow;">
    <?php echo $opt3; ?>
  </div>
  <div class="col-sm-6" style="background-color:yellow;">
    <?php echo $opt4; ?>
  </div>
  </div>
</div>
