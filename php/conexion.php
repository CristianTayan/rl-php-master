<?php
$host="localhost";
$user="root";
$password="";
$db="myapp";
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "{smileexamen.mysql.database.azure.com}", "{CristianTayan@smileexamen}", {1991Cris}, {myapp}, 3306);

?>
