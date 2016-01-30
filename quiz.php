
<style>
body {
    background-color: black;
}

p{
  align-content: center;
  padding-top: 4%;
  padding-left: 5%;
  color: white;
  font-size:16px;
}

.tcent{
  align-content: center;
}
.qback{
  background-image:url('images/bq.png');
  background-size: cover;
  height:120px;
  background-repeat: no-repeat;
  align-self:center;
}
.que{
  width: 100%;
  height: 90px;
}
.option{
  padding-left: 3%;
  padding-right:3%;
}
.optw{
    background-image:url('images/ow.png');
    width: 300px;
    height: 55px;
}
.opty{
    background-image:url('images/oy.png');
    width: 300px;
    height: 55px;
}
.optr{
    background-image:url('images/or.png');
    width: 300px;
    height: 55px;
}
.optg{
    background-image:url('images/og.png');
    width: 300px;
    height: 55px;
}
.footer {
   padding-right: 10%;
   padding-left: 10%;
   position:absolute;
   bottom:0;
   width:90%;
   height:auto;   /* Height of the footer */
   background:black;
}
</style>

<script>
function setColor(e) {
  var target = e.target,
      count = +target.dataset.count;

   target.style.backgroundColor =  'blue';
   target.dataset.count = count === 1 ? 0 : 1;
</script>

<?php
require_once 'includes/db.php';
list($n_id, $no) = DB::queryFirstList("SELECT nextid, queno FROM nextque");
list($id,$question,$opt1,$opt2,$opt3,$opt4,$ans) = DB::queryFirstList("SELECT * FROM question WHERE id=%s",$n_id);
?>

<script type="text/javascript">
  var id="<?php echo $id; ?>";
  var question="<?php echo $question;?>";
  var opt1="<?php echo $opt1;?>";
  var opt2="<?php echo $opt2;?>";
  var opt3="<?php echo $opt3;?>";
  var opt4="<?php echo $opt4;?>";
  var ans="<?php echo $ans;?>";
  var select;
  var tag;
  var anstag="#"+ans;

  $(document).ready(function() {
  $('#A').click(function() {
     $(this).removeClass("optw");
     $(this).addClass("opty");
     select="A";
     tag="#A";
  });

  $('#B').click(function() {
     $(this).removeClass("optw");
     $(this).addClass("opty");
     select="B";
     tag="#B";
  });

  $('#C').click(function() {
     $(this).removeClass("optw");
     $(this).addClass("opty");
     select="C";
     tag="#C";
  });

  $('#D').click(function() {
     $(this).removeClass("optw");
     $(this).addClass("opty");
     select="D";
     tag="#D";
  });

  $('#result').click(function() {
     if(select == ans)
     {
       $(tag).removeClass("opty");
       $(tag).addClass("optg");
     }
     else
     {
      $(tag).removeClass("opty");
      $(tag).addClass("optr");
      $(anstag).removeClass("optw");
      $(anstag).addClass("optg");
     }
  });
  });


</script>
<button id="result"class='btn'>result</button>
<div class="footer">
<div>
  <div class="qback"><p><?php echo $question;?></p</div>
</div>
<div class="option">
<div class="row">
  <div id="A" class="col-md-4 optw "><p><?php echo $opt1;?></p></div>
  <div id="B"class="col-md-4 col-md-offset-4 optw"><p><?php echo $opt2;?></P></div>
</div>
<div class="row">
  <div id="C" class="col-md-4 optw"><p><?php echo $opt3;?></P></div>
  <div id="D"class="col-md-4 col-md-offset-4 optw"><p><?php echo $opt4;?></p></div>
</div>
</div>
</div>
