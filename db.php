<?php
session_start();

$conn = mysqli_connect(
  getenv('DBSERVER'),
  getenv('DBUSER'),
  getenv('DBPASSWORD'),
  getenv('DBNAME')
) or die(mysqli_erro($mysqli));

?>
