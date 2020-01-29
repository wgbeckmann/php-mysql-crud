<?php
session_start();

$conn = mysqli_connect(
  'mysql',
  'testuser',
  'testpassword',
  'testdatabase'
) or die(mysqli_erro($mysqli));

?>
