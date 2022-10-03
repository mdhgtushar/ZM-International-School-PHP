<?php 
include "data/config.php";
include "data/Database.php";
$db = new Database();
$tid = $_GET['tid'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name  = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $edu = mysqli_real_escape_string($db->link, $_POST['edu']);
    $phn  = mysqli_real_escape_string($db->link, $_POST['phn']);
    $adres = mysqli_real_escape_string($db->link, $_POST['adres']);
    $title1 = mysqli_real_escape_string($db->link, $_POST['title1']);
    $title2  = mysqli_real_escape_string($db->link, $_POST['title2']);

  $query = "UPDATE teacher
  SET
  name  = '$name',
  email = '$email',
  phn = '$phn',
  adres = '$adres',
  title1 = '$title1',
  title2 = '$title2',
  edu = '$edu'
  WHERE id = $tid";
  $update = $db->update($query);
  if ( $update) {
      echo '<script>window.location.href="teachers.php";</script>';
  }else{
    echo "erro..";
  }
}
?>