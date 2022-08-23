<?php
require_once "conn.inc.php";
$id = $_GET['dataid'];
$affectedRows = $db->exec("DELETE FROM galleryart WHERE id='$id'");
header("Location: ../edit.php");
exit();

