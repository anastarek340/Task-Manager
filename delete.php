<?php
include('db.php');

$id = $_GET['id'];
$delete = "DELETE FROM TASKS WHERE id='$id'";
$res = mysqli_query($conn,$delete);
header('location:show.php');



?>