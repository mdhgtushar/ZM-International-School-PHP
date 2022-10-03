<?php
include "data/config.php";
include "data/Database.php";
$db = new Database();
$id = $_GET['id'];
 $query = "DELETE FROM hmglrey WHERE id=$id";
 $deleteData = $db->delete($query);
 if ($deleteData) {
 	echo '<script> window.location.href = "index.php"; </script>';
 }
?>