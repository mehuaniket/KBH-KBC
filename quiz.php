
<style>
body {
    background-color: lightblue;
}
.back{
    background-image:url('images/og.png');
}
.col-sm-6{
  width: 300;
  height: 55;
}
</style>
<?php
require_once 'includes/db.php';
list($n_id, $no) = DB::queryFirstList("SELECT nextid, queno FROM nextque");
list($id,$question,$opt1,$opt2,$opt3,$opt4,$ans) = DB::queryFirstList("SELECT * FROM question WHERE id=%s",$n_id);
?>
<script>
function setColor(e) {
  var target = e.target,
      count = +target.dataset.count;

   target.style.backgroundColor =  'blue';
   target.dataset.count = count === 1 ? 0 : 1;
}
</script>

<div class="container-fluid" style="background-color:yellow;">
  <div class="row">
        <div class="col-sm-2" style="background-color:yellow;">
        <?php echo $id; ?>
        </div>
        <div class="col-sm-10" style="background-color:yellow;">
        <?php echo $question; ?>
        </div>
  </div>
  <div class="row">
  <div class="col-sm-6 back" id="optd1">
     <button type="button"  class="btn btn-primary btn-large"  onclick=""> <?php echo $opt1; ?></button>
  </div>
  <div class="col-sm-6 back" id="optd2">
     <button type="button"  class="btn btn-primary btn-large"  onclick=""> <?php echo $opt2; ?></button>
  </div>
 </div>
  <div class="row">
  <div class="col-sm-6 back" id="optd3">
     <button type="button"  class="btn btn-primary btn-large"  onclick=""> <?php echo $opt3; ?></button>
  </div>
  <div class="back col-sm-6 back" id="optd4">
     <button type="button"   class="btn btn-primary btn-large" onclick=""> <?php echo $opt4; ?></button>
  </div>
  </div>
</div>
