<?php
include "data/config.php";
include "data/Database.php";
$db = new Database();
$id = $_GET['id'];
 $query = "DELETE FROM teacher WHERE id=$id";
 $deleteData = $db->delete($query);
 if ($deleteData) {
 	echo '<script> window.location.href = "teachers.php"; </script>';
 }
?>