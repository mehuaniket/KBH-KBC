<?php
require_once 'includes/db.php';
list($id, $no) = DB::queryFirstList("SELECT nextid, queno FROM nextque");
echo "testing";
echo $id."\n";
echo $no;
?>
